package haidtph20645.fpoly.ggapimap.Fragment;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;
import com.google.android.material.bottomnavigation.BottomNavigationView;

import haidtph20645.fpoly.ggapimap.R;
import haidtph20645.fpoly.ggapimap.model.Adress;

public class MapsFragment extends Fragment {

    Adress adress;

    public MapsFragment(){

    }
    public MapsFragment(Adress adress){
        this.adress = adress;
    }


    private OnMapReadyCallback callback = new OnMapReadyCallback() {

        /**
         * Manipulates the map once available.
         * This callback is triggered when the map is ready to be used.
         * This is where we can add markers or lines, add listeners or move the camera.
         * In this case, we just add a marker near Sydney, Australia.
         * If Google Play services is not installed on the device, the user will be prompted to
         * install it inside the SupportMapFragment. This method will only be triggered once the
         * user has installed Google Play services and returned to the app.
         */
        @Override
        public void onMapReady(GoogleMap googleMap) {

            //thao tac voi no
            if (adress != null){
            LatLng hanoi = new LatLng(adress.getLatitude(), adress.getLongitude());
            googleMap.addMarker(new MarkerOptions().position(hanoi).title(adress.getName()));
            googleMap.moveCamera(CameraUpdateFactory.newLatLng(hanoi));

            // zoom map
            googleMap.moveCamera(CameraUpdateFactory.newLatLngZoom(hanoi, 16.0f));

            // che do ve tinh
            googleMap.setMapType(GoogleMap.MAP_TYPE_HYBRID);

            // chon vi tri phai set bot_nav_map thanh true
            BottomNavigationView bottomNavigationView = getActivity().findViewById(R.id.nav_bottom);
            bottomNavigationView.getMenu().findItem(R.id.menu_map).setChecked(true);
            }
        }
    };

    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater,
                             @Nullable ViewGroup container,
                             @Nullable Bundle savedInstanceState) {
        return inflater.inflate(R.layout.fragment_maps, container, false);
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
        SupportMapFragment mapFragment =
                (SupportMapFragment) getChildFragmentManager().findFragmentById(R.id.map);
        if (mapFragment != null) {
            mapFragment.getMapAsync(callback);
        }
    }
}