public class Main {
    public static void main(String[] args) {
        int iteraciones = 10;
        int valorPrincipal = 0;
        for (int i = 0; i < iteraciones; i++) {
            Thread hA = new Hilo('A');
            Thread hB = new Hilo('B');
            Thread hC = new Hilo('C');
            /*Esto hace que el hilo que ha sido runeeado se bloquee hasta que termine*/
            hA.start();
            try {
                hA.join();
            } catch (InterruptedException e) {
                e.printStackTrace();
            }

            hB.start();
            try {
                hB.join();
            } catch (InterruptedException e) {
                e.printStackTrace();
            }

            hC.start();
            try {
                hC.join();
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
        }

        System.out.println("Fin del programa");
    }
}
