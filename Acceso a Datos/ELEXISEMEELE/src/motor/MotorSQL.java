package motor;

import interfaces.IMotor;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class MotorSQL implements IMotor {
    private final String URL = "jdbc:mysql://localhost:3306/yoquese";
    private final String USER = "root";
    private final String PASS = "";

    private ResultSet rs;
    private Connection cn;
    private Statement st;

    @Override
    public void conectar() {
        try {
            cn = DriverManager.getConnection(URL, USER, PASS);
            st = cn.createStatement();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    @Override
    public ResultSet consultar(String SQL) {
        try {
            rs = st.executeQuery(SQL);
        } catch (Exception e) {
            System.out.println(e);
        }
        return rs;
    }

    @Override
    public void modificar(String SQL) {
        try {
            st.executeUpdate(SQL);
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    @Override
    public void desconectar() {
        try {
            if (rs != null) {
                rs.close();
            }
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
