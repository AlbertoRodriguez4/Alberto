package motor;

import java.sql.*;

public class MotorDAO implements interfaces.motor {
    ResultSet rs;
    Statement st;
    Connection con;
    private final String url = "jdbc:mysql://localhost:3306/nosque";
    private final String user = "root";
    private final String pass = "";

    @Override
    public void connect() {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            con = DriverManager.getConnection(url, user, pass);
            st = con.createStatement();
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
    public int eexecuteUpdate(String SQL) {
        try {
            return st.executeUpdate(SQL);
        } catch (Exception e) {
            return 0;
        }
    }

    @Override
    public void disconnect() {
        try {
            if (con != null) {
                con.close();
            }
            if (st != null) {
                st.close();
            }
            if (rs != null) {
                rs.close();
            }
        } catch (Exception e) {
            System.out.println(e);
        }
    }
}
