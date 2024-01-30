public class HiloCantante extends Thread {
    private int numeroHilo;
    private Cancion cancion;

    // Constructor que recibe el número del hilo y la canción
    public HiloCantante(int numeroHilo, Cancion cancion) {
        this.numeroHilo = numeroHilo;
        this.cancion = cancion;
    }

    // Método que se ejecuta cuando se inicia el hilo
    @Override
    public void run() {
        // Obtener las estrofas de la canción
        String[] estrofas = cancion.getEstrofas();
        try {
            // Iterar sobre las estrofas, empezando desde la posición del número de hilo
            for (int i = numeroHilo - 1; i < estrofas.length; i += 2) {
                // Utilizar synchronized para garantizar la exclusión mutua en el objeto compartido 'cancion'
                synchronized (cancion) {
                    // Imprimir el mensaje indicando que el hilo está cantando
                    System.out.println("Hilo " + numeroHilo + " canta en la canción '" + cancion.getTitulo() + "': " + estrofas[i]);

                    // Notificar al siguiente hilo que puede ejecutarse
                    cancion.notify();

                    // Si no es la última estrofa, esperar a que el otro hilo termine de cantar y dormir el hilo actual
                    if (i < estrofas.length - 1) {
                        cancion.wait();
                        Thread.sleep(1000);
                    } else {
                        // Si es la última estrofa, notificar a todos los hilos para reiniciar el ciclo
                        cancion.notifyAll();
                    }
                }
            }
        } catch (Exception e) {
            // Capturar cualquier excepción que pueda ocurrir
            System.out.println("Acabe");
        }
    }
}
