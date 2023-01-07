package haidtph20645.fpoly.thithu3_map;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;

import java.util.ArrayList;
import java.util.List;

public class MainActivity2 extends AppCompatActivity {

    Button button;
    RecyclerView recyclerView;

    DiaDiemAdapter adapter;
    List<DiaDiem> list;
    DiaDiemDAO diaDiemDAO;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        recyclerView = findViewById(R.id.rcv_ds);

        list = new ArrayList<>();
        diaDiemDAO = new DiaDiemDAO(this);

        list.addAll(diaDiemDAO.selectAll());

        LinearLayoutManager linearLayoutManager = new LinearLayoutManager(this);
        recyclerView.setLayoutManager(linearLayoutManager);
        adapter = new DiaDiemAdapter(this, list);
        recyclerView.setAdapter(adapter);


        findViewById(R.id.main2_btn).setOnClickListener(view ->{
            startActivity(new Intent(MainActivity2.this, MainActivity3.class));
        });
    }

    @Override
    protected void onResume() {
        super.onResume();
        list.clear();
        list.addAll(diaDiemDAO.selectAll());
        adapter.notifyDataSetChanged();
    }
}