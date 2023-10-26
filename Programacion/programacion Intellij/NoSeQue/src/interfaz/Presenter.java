package interfaz;

public class Presenter implements MyInterface {
    @Override
    public void mostrarLoginCorrecto() {
        System.out.println("login correcto");
    }

    @Override
    public void mostrarLoginIncorrecto() {
        System.out.println("login incorrecto");

    }
}
