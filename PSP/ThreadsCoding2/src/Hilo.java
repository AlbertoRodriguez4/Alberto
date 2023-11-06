public class Hilo extends Thread {
    private char id;

    public Hilo(char id) {
        this.id = id;
    }

    public void run(Hilo hilo) {
        for (int i = 1; i < 10; i++) {
            System.out.println("Soy el Hilo" + this.id + ".");
            try {
                Thread.sleep(100);
            } catch (InterruptedException e) {
                System.out.println("Soy el Hilo" + this.id + ", me acaban de despertar.");
                throw new RuntimeException(e);
            }
        }
    }
}
