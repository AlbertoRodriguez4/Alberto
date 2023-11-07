import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        String accion = "";
        String tabla = "";
        System.out.println("Qué quieres hacer?");
        System.out.println("1- Mostrar datos como XML");
        System.out.println("2- Exportar datos como XML");
        System.out.println("3- Importar datos como XML");
        String systemAction = new Scanner(System.in).nextLine();
        switch (systemAction) {
            case "1":
                accion = "MOSTRAR";
        }
        System.out.println("¿Que tabla deseas " + accion + "?");
        System.out.println("1 - Clientes.");
        System.out.println("2 - Datos Facturación.");
        System.out.println("3 - Direcciones Envío.");
        System.out.println("4 - Juguetes Empresa.");

        String systemAction2 = new Scanner(System.in).nextLine();

        switch (systemAction2) {
            case "1":
                tabla = "clientes";
        }
        Controller.ejecutar(tabla, accion);
    }
}