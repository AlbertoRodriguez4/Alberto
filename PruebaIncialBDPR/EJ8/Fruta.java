public class Fruta   {
    private String nombreFruta;
    private int cantidad;
    private Fruta fruta;
    public Fruta(int cantidad, String nombreFruta) {
        this.cantidad = cantidad;
        this.nombreFruta = nombreFruta;

    }

    public String getNombreFruta() {
        return nombreFruta;
    }

    public void setNombreFruta(String nombreFruta) {
        this.nombreFruta = nombreFruta;
    }

    public int getCantidad() {
        return cantidad;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    @Override
    public String toString() {
        return "Verdura [nombreVerdura=" + nombreFruta + ", cantidad=" + cantidad + "]";
    }

    public Fruta getFruta() {
        return fruta;
    }

    public void setFruta(Fruta fruta) {
        this.fruta = fruta;
    }

}
