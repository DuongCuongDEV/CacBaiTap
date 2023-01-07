package haidtph20645.fpoly.ggapimap;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentManager;

import android.os.Bundle;
import android.view.MenuItem;

import com.google.android.material.bottomnavigation.BottomNavigationView;
import com.google.android.material.navigation.NavigationBarView;

import haidtph20645.fpoly.ggapimap.Fragment.HomeFragment;
import haidtph20645.fpoly.ggapimap.Fragment.MapsFragment;

public class MainActivity extends AppCompatActivity {

    BottomNavigationView bottomNavigationView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        bottomNavigationView = findViewById(R.id.nav_bottom);

        replaceFrm(new HomeFragment());
        bottomNavigationView.getMenu().findItem(R.id.menu_home).setChecked(true);       // set focus cho nav_bottom

        //xử lý sự kiện khi click chọn bottom_nav
        bottomNavigationView.setOnItemSelectedListener(new NavigationBarView.OnItemSelectedListener() {
            @Override
            public boolean onNavigationItemSelected(@NonNull MenuItem item) {
                switch (item.getItemId()){
                    case R.id.menu_home:
                        replaceFrm(new HomeFragment());
                        break;
                    case R.id.menu_map:
                        replaceFrm(new MapsFragment());
                        break;
                    default:
                        replaceFrm(new HomeFragment());
                }
                return true;
            }
        });

    }

    private void replaceFrm(Fragment fragment){
        FragmentManager fragmentManager = getSupportFragmentManager();
        fragmentManager.beginTransaction().replace(R.id.frameLayout, fragment).commit();
    }
}