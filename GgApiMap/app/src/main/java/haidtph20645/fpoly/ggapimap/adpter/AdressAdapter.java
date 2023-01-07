package haidtph20645.fpoly.ggapimap.adpter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentManager;
import androidx.recyclerview.widget.RecyclerView;

import java.util.ArrayList;

import haidtph20645.fpoly.ggapimap.Fragment.MapsFragment;
import haidtph20645.fpoly.ggapimap.R;
import haidtph20645.fpoly.ggapimap.dao.AdressDAO;
import haidtph20645.fpoly.ggapimap.model.Adress;

public class AdressAdapter extends RecyclerView.Adapter<AdressAdapter.ViewHoler>{

    Context context;
    ArrayList<Adress> list = new ArrayList<>();
    AdressDAO adressDAO;

    public AdressAdapter(Context context, ArrayList<Adress> list) {
        this.context = context;
        this.list = list;
        adressDAO = new AdressDAO(context);
    }

    @NonNull
    @Override
    public ViewHoler onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(context).inflate(R.layout.item_adress, null);
        return new ViewHoler(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHoler holder, int position) {
        holder.name.setText(list.get(position).getName());
        holder.adress.setText(list.get(position).getLatitude() + " : " + list.get(position).getLongitude());

        holder.linearLayout.setOnClickListener(view ->{
                Fragment fragmentMap = new MapsFragment(list.get(position));
                replaceFrm(fragmentMap);
        });

        holder.linearLayout.setOnLongClickListener(view ->{
            if (adressDAO.delete(list.get(position))){
                Toast.makeText(context, "Sussces", Toast.LENGTH_SHORT).show();
                list.clear();
                list.addAll(adressDAO.getAll());
                notifyDataSetChanged();
            }
            else {
                Toast.makeText(context, "Fail", Toast.LENGTH_SHORT).show();
            }
            return true;
        });
    }

    @Override
    public int getItemCount() {
        return list.size();
    }

    public class ViewHoler extends RecyclerView.ViewHolder{
        TextView name, adress;
        LinearLayout linearLayout;
        public ViewHoler(@NonNull View itemView) {
            super(itemView);
            name = itemView.findViewById(R.id.item_name);
            adress = itemView.findViewById(R.id.item_adress);
            linearLayout = itemView.findViewById(R.id.item_linearLayout);
        }
    }

    private void replaceFrm(Fragment fragment){
        FragmentManager fragmentManager = ((AppCompatActivity)context).getSupportFragmentManager();
        fragmentManager.beginTransaction().replace(R.id.frameLayout, fragment).commit();
    }
}
