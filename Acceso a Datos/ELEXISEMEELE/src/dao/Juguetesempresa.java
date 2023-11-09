package dao;

import interfaces.IDao;
import interfaces.ITablas;
import motor.MotorSQL;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

import java.sql.ResultSet;

public class Juguetesempresa implements IDao, ITablas {
    private MotorSQL motorSQL;

    public Juguetesempresa() {
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
                exportar(XMLExp, "juguetesempresa");
                break;
            case "IMPORTAR":
                String XMLImp = traducir();
                NodeList lista = XMLtoSQL(XMLImp, "juguetesempresa", "juguetesempresass"); //la segunda parte de la tabla
                insertar(lista);
                break;
        }
        motorSQL.desconectar();
    }

    @Override
    public String traducir() {
        String xml = "";
        xml += "<jueguetesempresa>\n";
        try {
            ResultSet resultados = motorSQL.consultar("SELECT * FROM juguetesempresa");
            while (resultados.next()) {
                int ArticuloID = resultados.getInt("ArticuloID");
                String NombreArticulo = resultados.getString("NombreArticulo");
                int StockDisponible = resultados.getInt("StockDisponible");
                xml += "\t<jueguetesempresass>\n";
                xml += "\t\t<ArticuloID>" + ArticuloID + "</ArticuloID>\n";
                xml += "\t\t<NombreArticulo>" + NombreArticulo + "</NombreArticulo>\n";
                xml += "\t\t<StockDisponible>" + StockDisponible + "</StockDisponible>\n";
                xml += "\t</jueguetesempresass>\n";
            }
        } catch (Exception e) {
            System.out.println(e);
        }
        xml += "</jueguetesempresa>";
        return xml;
    }

    @Override
    public void insertar(NodeList lista) {
        String sentencia = "";
        for (int i = 0; i < lista.getLength(); i++) {
            Node particularNode = lista.item(i);
            System.out.println(lista);
            if (particularNode.getNodeType() == Node.ELEMENT_NODE) {
                Element juguetesempresa = (Element) particularNode;
                Node idNode = juguetesempresa.getElementsByTagName("ArticuloID").item(0);
                String ArticuloID = (idNode != null) ? idNode.getTextContent() : "";
                String NombreArticulo = juguetesempresa.getElementsByTagName("NombreArticulo").item(0).getTextContent();
                int StockDisponible = Integer.parseInt(juguetesempresa.getElementsByTagName("StockDisponible").item(0).getTextContent());
                if (idNode != null) {
                    sentencia = "INSERT INTO juguetesempresa(ArticuloID, 'NombreArticulo', StockDisponible) VALUES ("+ArticuloID+",'"+NombreArticulo+"',"+StockDisponible+"')";
                    System.out.println(sentencia);
                    motorSQL.modificar(sentencia);
                } else {
                    System.out.println("no se ha podido hacer la insercion");
                }
            }
        }
    }
}
