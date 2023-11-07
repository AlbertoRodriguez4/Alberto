package dao;

import interfaces.IDao;
import interfaces.ITablas;
import motor.MotorSQL;
import org.w3c.dom.NodeList;

import java.sql.ResultSet;

public class Clientes implements IDao, ITablas {
    private MotorSQL motorSQL;

    public Clientes() {
        this.motorSQL = new MotorSQL();
    }


    public void ejecutar(String accion) {
        motorSQL.conectar();
        switch (accion) {
            case "MOSTRAR":
                String XMLMos = traducir();
                mostrar(XMLMos);
                break;
            case "EXPORTAR":
                String XMLExp = traducir();
                //exportar(XMLExp, "clientes");
                break;
            case "IMPORTAR":
                String XMLImp = traducir();
                //NodeList lista = XmlToSQL(XMLImp, "clientes", "cliente");
                //insertar(lista);
                break;
        }
        motorSQL.desconectar();
    }

    @Override
    public String traducir() {
        String xml = "";
        xml += "<lista_usuarios>\n";
        try {
            ResultSet resultados = motorSQL.consultar("SELECT * FROM clientes");
            while (resultados.next()) {
                int idCliente = resultados.getInt("ClienteID");
                String nombre = resultados.getString("Nombre");
                String apellido = resultados.getString("Apellido");
                String usuario = resultados.getString("Usuario");
                String contraseña = resultados.getString("Contraseña");
                String correo = resultados.getString("CorreoElectronico");
                int telefono = resultados.getInt("Telefono");
                xml += "\t<cliente>\n";
                xml += "\t\t<idCliente>" + idCliente + "</idCliente>\n";
                xml += "\t\t<nombre>" + nombre + "</nombre>\n";
                xml += "\t\t<apellido>" + apellido + "</apellido>\n";
                xml += "\t\t<usuario>" + usuario + "</usuario>\n";
                xml += "\t\t<contraseña>" + contraseña + "</contraseña>\n";
                xml += "\t\t<correo>" + correo + "</correo>\n";
                xml += "\t\t<telefono>" + telefono + "</telefono>\n";
                xml += "\t</cliente>\n";
            }
        } catch (Exception e) {
            System.out.println(e);
        }
        xml += "</lista_usuarios>";
        return xml;
    }

    @Override
    public void insertar(NodeList lista) {

    }
}
