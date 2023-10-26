package interfaces;

import java.sql.ResultSet;

public interface motor {
    public void connect();
    public ResultSet executeQuery(String SQL);
    public int eexecuteUpdate(String SQL);
    public void disconnect();
}
