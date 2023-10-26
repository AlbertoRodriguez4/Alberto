// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) throws InterruptedException {
        Mi1erHilo hilo = new Mi1erHilo();
        Mi1erHilo hilo2 = new Mi1erHilo();
        Mi1erHilo hilo3 = new Mi1erHilo();
        Mi1erHilo hilo4 = new Mi1erHilo();
        Mi1erHilo hilo5 = new Mi1erHilo();
         
        hilo.setIdentificador(1);
        hilo2.setIdentificador(2);
        hilo3.setIdentificador(3);
        hilo4.setIdentificador(4);
        hilo5.setIdentificador(5);

        hilo.start();
        hilo2.start();
        hilo3.start();
        hilo4.start();
        hilo5.start();
        Thread.sleep(5000);
        System.out.println("Adios mundo");
    }
}