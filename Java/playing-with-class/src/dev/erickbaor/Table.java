package dev.erickbaor;

public class Table {
    String color;
    String type;
    String shape;
    int numOfLegs;
    int weight;

    Table(String color, String type, String shape, int numOfLegs, int weight) {
        this.color = color;
        this.type = type;
        this.shape = shape;
        this.numOfLegs = numOfLegs;
        this.weight = weight;
    }

    void bear(int size) {
        if (size == this.weight) {
            System.out.println("Sosteniendo un objeto al limite ideal");
        } else if (size < this.weight) {
            System.out.println("Sosteniendo un peso ligero");
        } else {
            System.out.println("No se puede sostener");
        }
    }
}
