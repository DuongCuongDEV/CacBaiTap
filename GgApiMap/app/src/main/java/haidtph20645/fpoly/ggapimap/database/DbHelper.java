package haidtph20645.fpoly.ggapimap.database;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

import androidx.annotation.Nullable;

public class DbHelper extends SQLiteOpenHelper {
    public DbHelper( Context context) {
        super(context, "mapApi", null, 1);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL("CREATE TABLE DanhSach(" +
                "name text primary key," +
                "latitude real," +
                "longityde real)");

        db.execSQL("INSERT INTO DanhSach VALUES ('CD FPT', 21.038335350379835, 105.74680936243718)");
        db.execSQL("INSERT INTO DanhSach VALUES ('OLD TRANFFORD', 53.46312480675588, -2.2912956807311247)");
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {

    }
}
