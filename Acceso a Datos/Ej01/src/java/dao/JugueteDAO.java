/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dao;

import interfaces.IDao;
import java.sql.ResultSet;
import java.util.ArrayList;
import motor.MotorSQL;
/**
 *
 * @author altf4
 */
public class JugueteDAO <Juguete> implements IDao{
public MotorSQL motorSQL;

    @Override
    public ArrayList<Juguete> findall() {
        try {
            ArrayList<Juguete> lstJuguete = new ArrayList<>();
            motorSQL.connect();
            String SQL = "SELECT * FROM JUGUETE";
            ResultSet rs = motorSQL.executeQuery(SQL);
            while (rs.next()) {
                Juguete juego = new Juguete();
                
            }
        } catch (Exception e) {
            System.out.println(e);
            return null;
        }
    }
    
    
}
