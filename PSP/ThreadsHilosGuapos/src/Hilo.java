class Hilo extends Thread {
    private char nombre;

    public Hilo(char nombre) {
        this.nombre = nombre;
    }

    @Override
    public void run() {
        System.out.println("Hilo " + nombre);
        try {
            Thread.sleep(100); // Simula alguna tarea
        } catch (InterruptedException e) {
            e.printStackTrace();
        }
    }
}