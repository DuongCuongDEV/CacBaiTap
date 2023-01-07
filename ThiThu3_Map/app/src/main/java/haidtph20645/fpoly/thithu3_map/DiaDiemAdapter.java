package haidtph20645.fpoly.thithu3_map;

import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.List;

public class DiaDiemAdapter extends RecyclerView.Adapter<DiaDiemAdapter.ViewHolder> {

    Context context;
    List<DiaDiem> list;
    DiaDiemDAO diaDiemDAO;

    public DiaDiemAdapter(Context context, List<DiaDiem> list) {
        this.context = context;
        this.list = list;
        this.diaDiemDAO = new DiaDiemDAO(context);
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(context).inflate(R.layout.item_map, null);
        return new ViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        holder.tvName.setText(list.get(position).name);
        holder.tvToado.setText(list.get(position).toadoX + " - " + list.get(position).toadoY);

        holder.imageView.setOnClickListener(view ->{
            Intent intent = new Intent(context, MapsActivity.class);
            Bundle bundle = new Bundle();
            bundle.putSerializable("diadiem" , list.get(position));
            intent.putExtras(bundle);
            context.startActivity(intent);
        });

        holder.tvToado.setOnClickListener(view->{
            if (diaDiemDAO.delete(list.get(position))){
                Toast.makeText(context, "Delete sucsess", Toast.LENGTH_SHORT).show();
                list.clear();
                list.addAll(diaDiemDAO.selectAll());
                notifyDataSetChanged();
            }
        });
    }

    @Override
    public int getItemCount() {
        return list.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder {
        TextView tvName, tvToado;
        ImageView imageView;
        public ViewHolder(@NonNull View itemView) {
            super(itemView);
            tvName = itemView.findViewById(R.id.item_name);
            tvToado = itemView.findViewById(R.id.item_toado);
            imageView = itemView.findViewById(R.id.item_img);
        }
    }
}
