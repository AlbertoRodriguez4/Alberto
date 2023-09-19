package java.motor;

import java.interfaces.IMotor;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class MotorSQL implements IMotor {
    private ResultSet rs;
    private Statement st;
    private Connection cn;
    private final String URL = "";
    private final String USER = "Alberto";
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
            System.out.println(e);
            return null;
        }
    }

    @Override
    public int executeUpdate(String SQL) {
        try {
            return st.executeUpdate(SQL);
        } catch (Exception e) {
            System.out.println(e);
            return 0;
        }
    }

    @Override
    public void disconnect() {
        try {
            if(cn != null) {
                cn.close();
            }
            if(st != null) {
                st.close();
            }
            if(rs != null) {
                rs.close();
            }
        } catch (Exception e) {
            System.out.println(e);
        }
    }
}
