package model;

public class juguete {
    private int id, unidad, precio;
    private String nombre;

    public juguete(int id) {
        this.id = id;
    }

    public juguete() {
    }

    public juguete(int id, int unidad, int precio, String nombre) {
        this.id = id;
        this.unidad = unidad;
        this.precio = precio;
        this.nombre = nombre;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getUnidad() {
        return unidad;
    }

    public void setUnidad(int unidad) {
        this.unidad = unidad;
    }

    public int getPrecio() {
        return precio;
    }

    public void setPrecio(int precio) {
        this.precio = precio;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    @Override
    public String toString() {
        return "juguete{" +
                "id=" + id +
                ", unidad=" + unidad +
                ", precio=" + precio +
                ", nombre='" + nombre + '\'' +
                '}';
    }
}
