package haidtph20645.fpoly.thithu3_map;

import androidx.appcompat.app.AppCompatActivity;

import android.animation.ObjectAnimator;
import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        TextView textView = findViewById(R.id.main1_tv);

        ObjectAnimator objectRotation = ObjectAnimator.ofFloat(textView,
                "rotation", 0f, 360f);       // xoay 360
        objectRotation.setDuration(1000); // Thời gian thực hiện là 1s
        objectRotation.start();

        Handler handler = new Handler();
        handler.postDelayed(new Runnable() {
            @Override
            public void run() {
                startActivity(new Intent(MainActivity.this, MainActivity2.class));
            }
        }, 2000);
    }
}