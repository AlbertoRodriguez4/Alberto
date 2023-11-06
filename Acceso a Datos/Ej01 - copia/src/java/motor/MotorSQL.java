/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package motor;

import interfaces.IMotor;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

/**
 *
 * @author altf4
 */
public class MotorSQL implements IMotor {

    private ResultSet rs;
    private Statement st;
    private Connection cn;
    private final String URL = "jdbc:derby://localhost:1527/Juguetes";
    private final String USER = "alberto";
    private final String PASS = "1234";

    @Override
    public void connect() {
        try {
            cn = DriverManager.getConnection(URL, USER, PASS);
            st = cn.createStatement();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    @Override
    public ResultSet executeQuery(String SQL) {
        try {
            return st.executeQuery(SQL);
        } catch (Exception e) {
            return null;
        }
    }

    @Override
    public int updateQuery(String SQL) {
        try {
            return st.executeUpdate(SQL);
        } catch(Exception e) {
            return 0;
        }
    }

    @Override
    public void disconnect() {
       try {
            if (cn != null) {
                cn.close();

            }
            if (st != null) {
                st.close();

            }
        } catch (Exception e) {
            System.out.println(e);
        }
    }

}
