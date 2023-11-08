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
                NodeList lista = XMLtoSQL(XMLImp, "datosfacturacion", "datosfacturacioness");
                insertar(lista);
                break;
        }
        motorSQL.desconectar();
    }

    @Override
    public String traducir() {
        String xml = "";
        xml += "<datosfacturacion>\n";
        try {
            ResultSet resultados = motorSQL.consultar("SELECT * FROM datosfacturacion");
            while (resultados.next()) {
                int FacturacionID = resultados.getInt("FacturacionID");
                int ClienteID = resultados.getInt("ClienteID");
                String CIF = resultados.getString("CIF");
                String DireccionFacturacion = resultados.getString("DireccionFacturacion");
                String NombreEmpresa = resultados.getString("NombreEmpresa");
                xml += "\t<datosfacturacioness>\n";
                xml += "\t\t<FacturacionID>" + FacturacionID + "</FacturacionID>\n";
                xml += "\t\t<ClienteID>" + ClienteID + "</ClienteID>\n";
                xml += "\t\t<CIF>" + CIF + "</CIF>\n";
                xml += "\t\t<DirecciónFacturación>" + DireccionFacturacion + "</DirecciónFacturación>\n";
                xml += "\t\t<NombreEmpresa>" + NombreEmpresa + "</NombreEmpresa>\n";
                xml += "\t</datosfacturacion>\n";
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
            System.out.println(lista);
            if (particularNode.getNodeType() == Node.ELEMENT_NODE) {
                Element datosfacturacion = (Element) particularNode;
                Node idNode = datosfacturacion.getElementsByTagName("FacturacionID").item(0);
                String FacturacionID = (idNode != null) ? idNode.getTextContent() : "";
                int ClienteID = Integer.parseInt(datosfacturacion.getElementsByTagName("ClienteID").item(0).getTextContent());
                String CIF = datosfacturacion.getElementsByTagName("CIF").item(0).getTextContent();
                String DireccionFacturacion = datosfacturacion.getElementsByTagName("DireccionFacturacion").item(0).getTextContent();
                String NombreEmpresa = datosfacturacion.getElementsByTagName("NombreEmpresa").item(0).getTextContent();
                if (idNode != null) {
                    sentencia = "INSERT INTO datosfacturacion(FacturacionID, ClienteID, CIF, DireccionFacturacion, NombreEmpresa) VALUES ("+FacturacionID+","+ClienteID+",'"+CIF+"','"+DireccionFacturacion+"','"+NombreEmpresa+"')";
                    System.out.println(sentencia);
                    motorSQL.modificar(sentencia);
                } else {
                    System.out.println("no se ha podido hacer la insercion");
                }
            }
        }
    }
}
