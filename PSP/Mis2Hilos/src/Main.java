public class Main {
    public static void main(String[] args) throws InterruptedException {
        Hilo hA = new Hilo("A");
        Hilo hB = new Hilo("B");
        Hilo hC = new Hilo("C");

        hA.start();
        hB.start();
        hC.start();



        System.out.println("Fin del programa...");
    }
}
