package dao;

import interfaces.IDAO;
import model.juguete;
import motor.MotorDAO;

import java.sql.ResultSet;
import java.util.ArrayList;

public class jugueteDAO implements IDAO {
    private String cadena = "";
    public MotorDAO motorDAO;


    @Override
    public ArrayList<juguete> findall() {
        try {
            ArrayList<juguete> lstjuguetes = new ArrayList<>();
            motorDAO.connect();
            String SQL = "Select * from juguete";
            ResultSet rs = motorDAO.executeQuery(SQL);
            while (rs.next()) {
                juguete juguete = new juguete();
                juguete.setId(rs.getInt("Id"));
                juguete.setNombre(rs.getString("Nombre"));
                juguete.setUnidad(rs.getInt("Unidad"));
                juguete.setPrecio(rs.getInt("Precio"));
                lstjuguetes.add(juguete);

            }

            motorDAO.disconnect();
            return lstjuguetes;

        } catch (Exception e) {
            return null;
        }
    }
}
