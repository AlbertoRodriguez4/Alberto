import dao.Clientes;

public class Controller {
    public static void ejecutar(String tabla, String action) {
        switch (tabla) {
            case "clientes":
                new Clientes().ejecutar(action);
                break;
        }
    }
}
