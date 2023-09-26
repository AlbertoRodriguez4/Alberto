public class Verdura {
    private String nombreVerdura;
    private int cantidad;

    public Verdura(int cantidad, String nombreVerdura) {
        this.cantidad = cantidad;
        this.nombreVerdura = nombreVerdura;

    }

    public String getNombreVerdura() {
        return nombreVerdura;
    }

    public void setNombreVerdura(String nombreVerdura) {
        this.nombreVerdura = nombreVerdura;
    }

    public int getCantidad() {
        return cantidad;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    @Override
    public String toString() {
        return "Verdura [nombreVerdura=" + nombreVerdura + ", cantidad=" + cantidad + "]";
    }

}
