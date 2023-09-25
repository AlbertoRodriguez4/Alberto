class Fruteria {
    private int cantidad;
    private String nombre;
    private Fruta fruta;
    public Fruteria(int cantidad, String nombre) {
        this.cantidad = cantidad;
        this.nombre = nombre;
    }

    public int getCantidad() {
        return cantidad;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public Fruta getFruta() {
        return fruta;
    }

    public void setFruta(Fruta fruta) {
        this.fruta = fruta;
    }

    @Override
    public String toString() {
        return "Fruteria [cantidad=" + cantidad + ", nombre=" + nombre + "]";
    }

    
}

