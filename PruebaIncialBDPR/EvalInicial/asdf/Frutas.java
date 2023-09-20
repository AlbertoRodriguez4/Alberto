public class Frutas {
    private String NombreFruta;
    private int Cantidad;
    public Frutas(String nombreFruta, int cantidad) {
        NombreFruta = nombreFruta;
        Cantidad = cantidad;
    }
    public String getNombreFruta() {
        return NombreFruta;
    }
    public void setNombreFruta(String nombreFruta) {
        NombreFruta = nombreFruta;
    }
    public int getCantidad() {
        return Cantidad;
    }
    public void setCantidad(int cantidad) {
        Cantidad = cantidad;
    }
    @Override
    public String toString() {
        return "Frutas [NombreFruta=" + NombreFruta + ", Cantidad=" + Cantidad + "]";
    }

}