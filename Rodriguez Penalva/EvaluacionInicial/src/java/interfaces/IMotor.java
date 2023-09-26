package java.interfaces;

import java.sql.ResultSet;

public interface IMotor {
    public void connect();
    public ResultSet executeQuery(String SQL);
    public int executeUpdate (String SQL);
    public void disconnect();
}
