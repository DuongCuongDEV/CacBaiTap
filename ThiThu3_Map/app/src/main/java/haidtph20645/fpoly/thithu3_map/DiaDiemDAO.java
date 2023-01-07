package haidtph20645.fpoly.thithu3_map;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;

import java.util.ArrayList;
import java.util.List;

public class DiaDiemDAO {
    Context context;
    DbHelper dbHelper;

    public DiaDiemDAO(Context context) {
        this.context = context;
        this.dbHelper = new DbHelper(context);
    }

    public List<DiaDiem> selectAll(){
        List<DiaDiem> list = new ArrayList<>();
        SQLiteDatabase db = dbHelper.getReadableDatabase();
        Cursor cursor = db.rawQuery("SELECT * FROM DanhSach", null);
        cursor.moveToFirst();
        while (!cursor.isAfterLast()){
            String name = cursor.getString(0);
            Double toadoX = cursor.getDouble(1);
            Double toadoY = cursor.getDouble(2);

            list.add(new DiaDiem(name, toadoX, toadoY));
            cursor.moveToNext();
        }
        cursor.close();
        return list;
    }


    public boolean insert(DiaDiem diaDiem){
        SQLiteDatabase db = dbHelper.getWritableDatabase();
        ContentValues values = new ContentValues();
        values.put("name", diaDiem.name);
        values.put("toadoX", diaDiem.toadoX);
        values.put("toadoy", diaDiem.toadoY);
        long kq = db.insert("DanhSach", null, values);
        return kq>0;
    }

    public boolean delete(DiaDiem diaDiem){
        SQLiteDatabase db = dbHelper.getWritableDatabase();
        long kq = db.delete("DanhSach", "name=?", new String[]{diaDiem.name});
        return kq>0;
    }

}
