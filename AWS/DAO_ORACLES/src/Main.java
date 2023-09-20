import java.sql.*;

// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        String RDS_INSTANCE_HOSTNAME = "orcl.c2kaacxm5523.us-east-1.rds.amazonaws.com";
        String RDS_INSTANCE_PORT = "1521";
        String JDBC_URL = "jdbc:oracle:thin:@" + RDS_INSTANCE_HOSTNAME + ":" + RDS_INSTANCE_PORT + ":orcl";

        try {
            Connection connection= DriverManager.getConnection(JDBC_URL,"admin","12341234");
            Statement stmt= connection.createStatement();
            ResultSet rs=stmt.executeQuery("SELECT * FROM CLIENTE");
            while (rs.next()) {
                String id = rs.getString(3);
                System.out.println(id); //Should print "X"
            }
            stmt.close();
            connection.close();
        } catch (SQLException e) {
            System.out.printf("error");
        }
    }
}