public class Mi1erHilo extends Thread {
    private int identificador;

    Mi1erHilo (int id) {
        this.identificador = id;
    }
    Mi1erHilo () {

    }
    public void setIdentificador(int identificador) {
        this.identificador = identificador;
    }

    public void run() {

       System.out.println("Hola mundo!!!, Soy el "+identificador+"º hilo");
    }
}