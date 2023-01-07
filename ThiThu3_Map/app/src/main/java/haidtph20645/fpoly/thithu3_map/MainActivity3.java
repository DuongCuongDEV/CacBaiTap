package haidtph20645.fpoly.thithu3_map;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.Button;
import android.widget.Toast;

import com.google.android.material.textfield.TextInputLayout;

public class MainActivity3 extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main3);

        TextInputLayout tpl_name = findViewById(R.id.main3_tpl_name);
        TextInputLayout tpl_X = findViewById(R.id.main3_tpl_toadoX);
        TextInputLayout tpl_Y = findViewById(R.id.main3_tpl_toadoY);
        Button button = findViewById(R.id.main3_btn);

        DiaDiemDAO diaDiemDAO = new DiaDiemDAO(this);

        button.setOnClickListener(view ->{
            if (checkEmptyTIL(tpl_name) | checkEmptyTIL(tpl_X) | checkEmptyTIL(tpl_Y)){

            }else {
                String name = tpl_name.getEditText().getText().toString().trim();
                Double toadoX = Double.parseDouble(tpl_X.getEditText().getText().toString().trim());
                Double toadoY = Double.parseDouble(tpl_Y.getEditText().getText().toString().trim());
                if (diaDiemDAO.insert(new DiaDiem(name, toadoX, toadoY))){
                    Toast.makeText(this, "Thanh cong", Toast.LENGTH_SHORT).show();
                    tpl_name.getEditText().setText("");
                    tpl_X.getEditText().setText("");
                    tpl_Y.getEditText().setText("");
                }
                else {
                    Toast.makeText(this, "That bai", Toast.LENGTH_SHORT).show();

                }
            }

        });

    }

    public boolean checkEmptyTIL(TextInputLayout textInputLayout) {
        String s = textInputLayout.getEditText().getText().toString();
        if (s.isEmpty()) {
            textInputLayout.setError("Rỗng");
            return true;
        } else {
            textInputLayout.setError(null);
            return false;
        }
    }
}