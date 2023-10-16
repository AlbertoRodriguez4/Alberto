package dao;

import interfaces.IDAO;
import model.juguete;
import motor.MotorDAO;

import java.sql.ResultSet;
import java.util.ArrayList;

public class jugueteDAO implements IDAO {
    public MotorDAO motorDAO = new MotorDAO();

public void ejectuar(String asdf) {
    motorDAO.connect();
    switch (asdf) {
        case "JUGUETES":
            findall();
    }
}
    public ArrayList<juguete> findall() {
        try {
            ArrayList<juguete> lstjuguetes = new ArrayList<>();
            motorDAO.connect();
            String SQL = "Select * from juguete";
            ResultSet rs = motorDAO.executeQuery(SQL);
            while (rs.next()) {
                juguete juguete = new juguete();
                juguete.setId(rs.getInt(1));
                juguete.setNombre(rs.getString(2));
                juguete.setUnidad(rs.getInt(3));
                juguete.setPrecio(rs.getInt(4));
                lstjuguetes.add(juguete);
            }

            motorDAO.disconnect();

            return lstjuguetes;

        } catch (Exception e) {
            return null;
        }
    }

    public static void main(String[] args) {
        jugueteDAO dao = new jugueteDAO(); // Crear una instancia de la clase dao
        ArrayList<juguete> lstjuguetes = dao.findall(); // Llamar al método findall para obtener la lista de juguetes

        // Verificar si la lista no es nula antes de imprimir
        if (lstjuguetes != null) {
            // Imprimir el ArrayList en la consola
            for (juguete j : lstjuguetes) {
                System.out.println(j); // Esto imprimirá el objeto juguete utilizando su método toString()
            }
        } else {
            System.out.println("Ocurrió un error al obtener la lista de juguetes.");
        }
    }

}
