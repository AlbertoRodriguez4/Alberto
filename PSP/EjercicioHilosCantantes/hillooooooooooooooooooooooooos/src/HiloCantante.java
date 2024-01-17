public class HiloCantante extends Thread {
    private int numeroHilo;
    private Cancion cancion;

    public HiloCantante(int numeroHilo, Cancion cancion) {
        this.numeroHilo = numeroHilo;
        this.cancion = cancion;
    }

    @Override
    public void run() {
        String[] estrofas = cancion.getEstrofas();
        try {
            for (int i = numeroHilo - 1; i < estrofas.length; i += 2) {
                synchronized (cancion) {
                    System.out.println("Hilo " + numeroHilo + " canta en la canción '" + cancion.getTitulo() + "': " + estrofas[i]);
                    cancion.notify(); // Notificar al siguiente hilo que puede ejecutarse

                    if (i < estrofas.length - 1) {
                        cancion.wait(); // Esperar a que el otro hilo termine de cantar
                        Thread.sleep(1000);
                    } else {
                        // Si es la última estrofa, notificar al primer hilo para reiniciar el ciclo
                        cancion.notifyAll();
                    }
                }
            }
        } catch (Exception e) {
            System.out.println("Acabe");
        }
    }
}