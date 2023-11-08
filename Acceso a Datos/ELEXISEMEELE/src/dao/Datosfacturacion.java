package dao;

import interfaces.IDao;
import interfaces.ITablas;
import motor.MotorSQL;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

import java.sql.ResultSet;

public class Datosfacturacion implements IDao, ITablas {
    private MotorSQL motorSQL;

    public Datosfacturacion() {
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
                exportar(XMLExp, "datosfacturacion");
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
        xml += "<direccion_envio>\n";
        try {
            ResultSet resultados = motorSQL.consultar("SELECT * FROM datosfacturacion");
            while (resultados.next()) {
                int FacturacionID = resultados.getInt("FacturacionID");
                int ClienteID = resultados.getInt("ClienteID");
                String CIF = resultados.getString("CIF");
                String DireccionFacturacion = resultados.getString("DireccionFacturacion");
                String NombreEmpresa = resultados.getString("NombreEmpresa");
                xml += "\t<DirecciónFacturación>\n";
                xml += "\t\t<FacturacionID>" + FacturacionID + "</FacturacionID>\n";
                xml += "\t\t<ClienteID>" + ClienteID + "</ClienteID>\n";
                xml += "\t\t<CIF>" + CIF + "</CIF>\n";
                xml += "\t\t<DirecciónFacturación>" + DireccionFacturacion + "</DirecciónFacturación>\n";
                xml += "\t\t<NombreEmpresa>" + NombreEmpresa + "</NombreEmpresa>\n";
            }
        } catch (Exception e) {
            System.out.println(e);
        }
        xml += "</direccion_envio>";
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
                    sentencia = "INSERT INTO clientes(ClienteId, Nombre, Apellido, Usuario, Contraseña, CorreoElectronico, Telefono) VALUES (" + ClienteId + ",'" + nombre + "','" + apellido + "','" + usuario + "','" + contraseña + "','" + correo + "','" + telefono + "')";
                    System.out.println(sentencia);
                    motorSQL.modificar(sentencia);
                } else {
                    System.out.println("no se ha podido hacer la insercion");
                }
            }
        }
    }
}
