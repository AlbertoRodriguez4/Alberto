package interfaces;

import org.w3c.dom.Document;
import org.w3c.dom.NodeList;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import java.io.File;
import java.io.FileWriter;

public interface ITablas {
    String traducir();

    void insertar(NodeList lista);

    default void mostrar(String XMLMos) {
        System.out.println(XMLMos);
    }
    default void exportar(String XMLExp, String tabla) {
        try {
            File archivo = new File("Archivos/"+tabla+"Exportados.xml");
            FileWriter writer = new FileWriter(archivo);
            writer.write(XMLExp);
            writer.close();
            System.out.println("El archivo "+tabla+ "Exportados.xml ha sido creado de forma correcta");
        } catch (Exception e) {
            System.out.println(e);
        }
    }
    default NodeList XMLtoSQL(String XMLImp, String tabla, String item) {
        NodeList listaDatos = null;
        try {
            DocumentBuilderFactory dBuilderFactory = DocumentBuilderFactory.newInstance();
            DocumentBuilder dBuilder = dBuilderFactory.newDocumentBuilder();
            System.out.println("Leyendo el archivo 'Archivos/" + tabla + "Importar.xml'");
            Document doc = dBuilder.parse("Archivos/" + tabla + "Importar.xml");
            doc.getDocumentElement().normalize();
            listaDatos = doc.getElementsByTagName(item);

        } catch (Exception e) {
            System.out.println(e);
        }
        return listaDatos;
    }
}
