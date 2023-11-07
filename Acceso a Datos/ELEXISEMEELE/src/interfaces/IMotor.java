package interfaces;

import java.sql.ResultSet;

public interface IMotor {
    public void conectar();

    public ResultSet consultar(String SQL);

    public void modificar(String SQL);

    public void desconectar();
}
