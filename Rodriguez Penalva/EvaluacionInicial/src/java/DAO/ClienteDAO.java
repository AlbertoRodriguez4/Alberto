package java.DAO;

import java.interfaces.IDAO;
import java.model.Cliente;
import java.motor.MotorSQL;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.model.Cliente;
public class ClienteDAO implements IDAO<Cliente, Integer> {
MotorSQL motorSQL = new MotorSQL();
    @Override
    public ArrayList<Cliente> find(Cliente bean) {
        try {
    ArrayList<Cliente> lstClientes = new ArrayList<>();
    motorSQL.connect();
    String SQL = "SELECT * FROM CLIENTE WHERE DNI = ";
            ResultSet rs = motorSQL.executeQuery(SQL);
    while (rs.next()) {
    Cliente cliente = new Cliente();
    cliente.setDNI(rs.getString("DNI"));
    lstClientes.add(cliente);
    }
    motorSQL.disconnect();
    return lstClientes;
        }   catch (Exception e) {
            System.out.println(e);
        }
        return null;
    }

    @Override
    public ArrayList<Cliente> findall() {
        try {
    ArrayList<Cliente> lstCliente = new ArrayList<>();
    motorSQL.connect();
    String SQL = "SELECT * FROM cliente";
    ResultSet rs = motorSQL.executeQuery(SQL);
    while (rs.next()) {
        Cliente cliente = new Cliente();
        cliente.setDNI(rs.getString("DNI"));
        cliente.setName(rs.getString("Nombre"));
        cliente.setSurname(rs.getString("Apellido"));
        cliente.setDireccion(rs.getString("Direccion"));
        cliente.setFechaNac(rs.getString("Fecha_Nac"));
        lstCliente.add(cliente);
    }
    motorSQL.disconnect();
    return lstCliente;
        }catch (Exception e) {

        }
        return null;
    }

    @Override
    public int add(Cliente bean) {
        try {
        motorSQL.connect();
        String SQL = "INSERT INTO cliente WHERE Nombre = '" + bean.getName() + "' AND Apellido = '"+ bean.getSurname()
                + "' AND DNI = '" +bean.getDNI() + "' AND Fecha_Nac = '" + bean.getFechaNac() + "' AND Direccion = "+bean.getDireccion() + "'";
        int filasModificadas = motorSQL.executeUpdate(SQL);
        return filasModificadas;
        } catch (Exception e) {
            System.out.println(e);
            return 0;
        }
    }

    @Override
    public int delete(Cliente bean) {
        int filasModificadas = 0;
    try {
        motorSQL.connect();
       String SQL = "DELETE FROM cliente WHERE DNI = '" +bean.getDNI() + "'";
       filasModificadas = motorSQL.executeUpdate(SQL);
       return filasModificadas;
    } catch (Exception e) {
        System.out.println(e);
        return 0;
        }
    }

    @Override
    public int update(Cliente bean) {
        try {
    motorSQL.connect();
    String SQL = "UPDATE cliente SET Nombre = '" +bean.getName() + "' WHERE DNI = '" +bean.getDNI() +"'";
    int filasModificadas = motorSQL.executeUpdate(SQL);
    return filasModificadas;
        } catch (Exception e) {
            System.out.println(e);
            return 0;
        }
    }

}
