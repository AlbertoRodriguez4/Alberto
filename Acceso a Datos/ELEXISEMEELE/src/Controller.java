import dao.Clientes;
import dao.Datosfacturacion;
import dao.Direccionesenvio;
import dao.Juguetesempresa;

public class Controller {
    public static void ejecutar(String tabla, String action) {
        switch (tabla) {
            case "clientes":
                new Clientes().ejecutar(action);
                break;
            case "datosfacturacion":
                new Datosfacturacion().ejecutar(action);
                break;
            case "direccionesenvio":
                new Direccionesenvio().ejecutar(action);
                break;
            case "juguetesempresa":
                new Juguetesempresa().ejecutar(action);
                break;
        }
    }
}
