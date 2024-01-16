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
        int longitudCancion = estrofas.length;

        for (int i = 0; i < longitudCancion; i++) {
            System.out.println("Hilo " + numeroHilo + " canta en la canción '" + cancion.getTitulo() + "': " + estrofas[i]);
        }
    }
}
