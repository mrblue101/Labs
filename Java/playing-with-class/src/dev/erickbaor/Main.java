package dev.erickbaor;

public class Main {

    public static void main(String[] args) {
	    Table plasticTable = new Table("orange","plastic","square", 4, 20);
	    Table woodTable = new Table("brown", "wood", "rectangular", 6, 25);

        plasticTable.bear(21);
        woodTable.bear(20);
    }
}
