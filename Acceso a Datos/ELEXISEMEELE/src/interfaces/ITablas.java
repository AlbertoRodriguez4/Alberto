package interfaces;

import org.w3c.dom.NodeList;

public interface ITablas {
    String traducir();
    void insertar(NodeList lista);
    default void mostrar(String XMLMos) {
        System.out.println(XMLMos);
    }
}
