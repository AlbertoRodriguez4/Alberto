package dao;

import interfaces.IDao;
import interfaces.ITablas;
import motor.MotorSQL;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
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
                exportar(XMLExp, "clientes");
                break;
            case "IMPORTAR":
                String XMLImp = traducir();
                NodeList lista = XMLtoSQL(XMLImp, "clientes", "cliente");
                insertar(lista);
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
        String sentencia = "";
        for (int i = 0; i < lista.getLength(); i++) {
            Node particularNode = lista.item(i);
            if (particularNode.getNodeType() == Node.ELEMENT_NODE) {
                Element articulo = (Element) particularNode;
                Node idNode = articulo.getElementsByTagName("Cliente_ID").item(0);
                String ClienteId = (idNode != null) ? idNode.getTextContent() : "";
                String nombre = articulo.getElementsByTagName("Nombre").item(0).getTextContent();
                String apellido = articulo.getElementsByTagName("Apellido").item(0).getTextContent();
                String usuario = articulo.getElementsByTagName("Usuario").item(0).getTextContent();
                String contraseña = articulo.getElementsByTagName("Contraseña").item(0).getTextContent();
                String correo = articulo.getElementsByTagName("CorreoElectronico").item(0).getTextContent();
                int telefono = Integer.parseInt(articulo.getElementsByTagName("Telefono").item(0).getTextContent());
                if (idNode != null) {
                    sentencia = "INSERT INTO clientes(ClienteId, Nombre, Apellido, Usuario, Contraseña, CorreoElectronico, Telefono) VALUES ("+ClienteId+",'" + nombre + "','" + apellido + "','" + usuario + "','" + contraseña + "','" + correo + "','" +telefono+"')";
                    System.out.println(sentencia);
                    motorSQL.modificar(sentencia);
                } else {
                    System.out.println("no se ha podido hacer la insercion");
                }
            }
        }
    }
}
