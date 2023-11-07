package interfaces;

public interface ITablas {
    String traducir();
    default void mostrar (String XMLMos) {
        System.out.println(XMLMos);
    }
}
