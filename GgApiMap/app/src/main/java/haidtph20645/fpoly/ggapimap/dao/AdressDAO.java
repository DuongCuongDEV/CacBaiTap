package haidtph20645.fpoly.ggapimap.dao;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;

import java.util.ArrayList;

import haidtph20645.fpoly.ggapimap.database.DbHelper;
import haidtph20645.fpoly.ggapimap.model.Adress;

public class AdressDAO {
    Context context;
    DbHelper dbHelper;

    public AdressDAO(Context context) {
        this.context = context;
        this.dbHelper = new DbHelper(context);
    }

    public ArrayList<Adress> getAll(){
        ArrayList<Adress> list = new ArrayList<>();
        SQLiteDatabase db = dbHelper.getReadableDatabase();
        Cursor cursor = db.rawQuery("SELECT * FROM DanhSach", null);

            cursor.moveToFirst();
            while (!cursor.isAfterLast()){
                String name = cursor.getString(0);
                Double latitude = cursor.getDouble(1);
                Double longitude = cursor.getDouble(2);
                list.add(new Adress(name, latitude, longitude));
                cursor.moveToNext();
            }
            cursor.close();
        return list;
    }

    public boolean insert(Adress adress){
        SQLiteDatabase db = dbHelper.getWritableDatabase();
        ContentValues values = new ContentValues();
        values.put("name", adress.getName());
        values.put("latitude", adress.getLatitude());
        values.put("longityde", adress.getLongitude());
        long kq = db.insert("DanhSach", null, values);
        return kq>0;
    }

    public boolean delete(Adress adress){
        SQLiteDatabase db = dbHelper.getWritableDatabase();
        long kq = db.delete("DanhSach", "name = ?", new String[]{adress.getName()} );
        return kq>0;
    }

}
