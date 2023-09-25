import java.util.ArrayList;

public class Index {
    public static void main(String[] args) {
        Fruteria manzana = new Fruteria(10, "Manzana");
        Fruteria pera = new Fruteria(20, "Pera");
        Fruteria naranja = new Fruteria(30, "Naranja");
        Fruteria Lechuga = new Fruteria(80, "Lechuga");
        Fruteria Tomate = new Fruteria(15, "Tomate");
        Fruteria Pepino = new Fruteria(50, "Pepino");

        ArrayList<Fruteria> frutas = new ArrayList<>();
        frutas.add(manzana);
        frutas.add(pera);
        frutas.add(naranja);
        frutas.add(Lechuga);
        frutas.add(Tomate);
        frutas.add(Pepino);
        System.out.println(frutas);
        
    }
}
