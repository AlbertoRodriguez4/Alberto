/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dao;

import interfaces.IDao;
import java.sql.ResultSet;
import java.util.ArrayList;
import model.Juguete;
import motor.MotorSQL;

/**
 *
 * @author altf4
 */
public class JugueteDAO implements IDao<Juguete> {

    MotorSQL motorSQL = new MotorSQL(); 
    @Override
    public ArrayList<Juguete> findall() {
        try {
            ArrayList<Juguete> lstJuguete = new ArrayList<>();
            motorSQL.connect();
            String SQL = "SELECT * FROM JUGUETE";
            ResultSet rs = motorSQL.executeQuery(SQL);
            while (rs.next()) {                
                Juguete juguete = new Juguete();
                juguete.setNombre(rs.getString("NOMBRE"));
                juguete.setCantidad(rs.getInt("CANTIDAD"));
                lstJuguete.add(juguete);
            }
            motorSQL.disconnect();
            return lstJuguete;
        } catch (Exception e) {
            System.out.println(e);
            return null;
        }
    }
    
}
