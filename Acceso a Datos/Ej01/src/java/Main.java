/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author altf4
 */
import dao.JugueteDAO;
import java.util.ArrayList;
import model.Juguete;

public class Main {
        public static void main(String[] args) {
        JugueteDAO jugueteDAO = new JugueteDAO();   
        System.out.println("asdfg");
        ArrayList<Juguete> juguetes = jugueteDAO.findall();
        int numero = 1;
            System.out.println(numero);
        if (juguetes != null) {
            for (Juguete juguete : juguetes) {
                System.out.println("Nombre: " + juguete.getNombre());
                System.out.println("Cantidad: " + juguete.getCantidad());
                System.out.println("--------------");
            }
        } else {
            System.out.println("Hubo un error al buscar los juguetes.");
        }
    }
}

