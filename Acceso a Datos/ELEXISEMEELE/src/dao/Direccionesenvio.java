package dao;

import interfaces.IDao;
import interfaces.ITablas;
import motor.MotorSQL;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

import java.sql.ResultSet;

public class Direccionesenvio implements IDao, ITablas {
    private MotorSQL motorSQL;

    public Direccionesenvio() {
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
                exportar(XMLExp, "direccionesenvio");
                break;
            case "IMPORTAR":
                String XMLImp = traducir();
                NodeList lista = XMLtoSQL(XMLImp, "direccionesenvio", "direccionesenvioss"); //la segunda parte de la tabla
                insertar(lista);
                break;
        }
        motorSQL.desconectar();
    }

    @Override
    public String traducir() {
        String xml = "";
        xml += "<direcciones_envio>\n";
        try {
            ResultSet resultados = motorSQL.consultar("SELECT * FROM direccionesenvio");
            while (resultados.next()) {
                int DireccionID = resultados.getInt("DireccionID");
                int ClienteID = resultados.getInt("ClienteID");
                String Direccion = resultados.getString("Direccion");
                String CodigoPostal = resultados.getString("CodigoPostal");
                String Ciudad = resultados.getString("Ciudad");
                String Provincia = resultados.getString("Provincia");
                String Pais = resultados.getString("Pais");
                xml += "\t<direccionesenvioss>\n";
                xml += "\t\t<DireccionID>" + DireccionID + "</DireccionID>\n";
                xml += "\t\t<ClienteID>" + ClienteID + "</ClienteID>\n";
                xml += "\t\t<Direccion>" + Direccion + "</Direccion>\n";
                xml += "\t\t<CodigoPostal>" + CodigoPostal + "</CodigoPostal>\n";
                xml += "\t\t<Ciudad>" + Ciudad + "</Ciudad>\n";
                xml += "\t\t<Provincia>" + Provincia + "</Provincia>\n";
                xml += "\t\t<Pais>" + Pais + "</Pais>\n";
                xml += "\t</direccionesenvio>\n";
            }
        } catch (Exception e) {
            System.out.println(e);
        }
        xml += "</direcciones_envio>";
        return xml;
    }

    @Override
    public void insertar(NodeList lista) {
        System.out.println(lista);
        String sentencia = "";
        for (int i = 0; i < lista.getLength(); i++) {
            Node particularNode = lista.item(i);
            System.out.println(lista);
            if (particularNode.getNodeType() == Node.ELEMENT_NODE) {
                Element direccionesenvio = (Element) particularNode;
                Node idNode = direccionesenvio.getElementsByTagName("DireccionID").item(0);
                String DireccionID = (idNode != null) ? idNode.getTextContent() : "";
                int ClienteID = Integer.parseInt(direccionesenvio.getElementsByTagName("ClienteID").item(0).getTextContent());
                String Direccion = direccionesenvio.getElementsByTagName("Direccion").item(0).getTextContent();
                String CodigoPostal = direccionesenvio.getElementsByTagName("CodigoPostal").item(0).getTextContent();
                String Ciudad = direccionesenvio.getElementsByTagName("Ciudad").item(0).getTextContent();
                String Provincia = direccionesenvio.getElementsByTagName("Provincia").item(0).getTextContent();
                String Pais = direccionesenvio.getElementsByTagName("Pais").item(0).getTextContent();
                if (idNode != null) {
                    sentencia = "INSERT INTO direccionesenvio(DireccionID, ClienteID, Direccion, CodigoPostal, Ciudad, Provincia, Pais) VALUES ("+DireccionID+","+ClienteID+",'"+Direccion+"','"+CodigoPostal+"','"+Ciudad+"','"+Provincia+"','"+Pais+"')";
                    System.out.println(sentencia);
                    motorSQL.modificar(sentencia);
                } else {
                    System.out.println("no se ha podido hacer la insercion");
                }
            }
        }
    }
}
