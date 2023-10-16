import dao.jugueteDAO;
import model.juguete;

import java.util.ArrayList;

public class Main {
    public static void main(String[] args) {
        jugueteDAO dao = new jugueteDAO();
        ArrayList<juguete> lstjuguetes = dao.findall();
        if (lstjuguetes != null) {
            for (juguete i : lstjuguetes) {
                System.out.println(i);
            }
        } else {
            System.out.println("Ocurrió un error al obtener la lista de juguetes.");
        }
    }
}
