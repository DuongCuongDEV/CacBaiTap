package haidtph20645.fpoly.thithu3_map;

import java.io.Serializable;

public class DiaDiem implements Serializable {
    public String name;
    public Double toadoX;
    public Double toadoY;

    public DiaDiem() {
    }

    public DiaDiem(String name, Double toadoX, Double toadoY) {
        this.name = name;
        this.toadoX = toadoX;
        this.toadoY = toadoY;
    }
}
