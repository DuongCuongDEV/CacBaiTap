package haidtph20645.fpoly.ggapimap.Fragment;

import android.app.Dialog;
import android.os.Bundle;

import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.util.ArrayList;

import haidtph20645.fpoly.ggapimap.R;
import haidtph20645.fpoly.ggapimap.adpter.AdressAdapter;
import haidtph20645.fpoly.ggapimap.dao.AdressDAO;
import haidtph20645.fpoly.ggapimap.model.Adress;

public class HomeFragment extends Fragment {

    RecyclerView recyclerView;
    Button button;

    AdressAdapter adapter;
    ArrayList<Adress> list = new ArrayList<>();
    AdressDAO adressDAO;

    public HomeFragment() {
        // Required empty public constructor
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_home, container, false);

        recyclerView = view.findViewById(R.id.rcv_list);
        button = view.findViewById(R.id.btn_add);
        adressDAO = new AdressDAO(getActivity());

        list.addAll(adressDAO.getAll());

//        list.add(new Adress("cd fpt",21.037768500230445, 105.7490193844602 ));

        LinearLayoutManager layoutManager = new LinearLayoutManager(getActivity());
        recyclerView.setLayoutManager(layoutManager);

        adapter = new AdressAdapter(getActivity(), list);
        recyclerView.setAdapter(adapter);

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Dialog dialog = new Dialog(getActivity());
                dialog.setContentView(R.layout.dialog_add);
                dialog.show();

                EditText edtName = dialog.findViewById(R.id.dialog_name);
                EditText edtLatitude = dialog.findViewById(R.id.dialog_latitude);
                EditText edtLongitude = dialog.findViewById(R.id.dialog_longitude);
                Button btnadd = dialog.findViewById(R.id.dialog_btn_add);

                btnadd.setOnClickListener(view ->{
                    String name = edtName.getText().toString().trim();
                    Double latitude = Double.parseDouble(edtLatitude.getText().toString().trim());
                    Double longitude = Double.parseDouble(edtLongitude.getText().toString().trim());

                    if (adressDAO.insert(new Adress(name, latitude, longitude))){
                        Toast.makeText(getActivity(), "Sucsces", Toast.LENGTH_SHORT).show();
                        list.clear();
                        list.addAll(adressDAO.getAll());
                        adapter.notifyDataSetChanged();
                        dialog.dismiss();
                    }else {
                        Toast.makeText(getActivity(), "Fail", Toast.LENGTH_SHORT).show();
                    }
                });
            }
        });

        return view;
    }

}
