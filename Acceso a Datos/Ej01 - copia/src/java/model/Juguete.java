/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package model;

/**
 *
 * @author altf4
 */
public class Juguete {

    private int jugueteId;
    private int cantidad;
    private String precioUnidad;
    private String nombre;

    public Juguete(int jugueteId, int cantidad, String precioUnidad, String nombre) {
        this.jugueteId = jugueteId;
        this.cantidad = cantidad;
        this.precioUnidad = precioUnidad;
        this.nombre = nombre;
    }

    public Juguete() {
    }

    public int getJugueteId() {
        return jugueteId;
    }

    public void setJugueteId(int jugueteId) {
        this.jugueteId = jugueteId;
    }

    public int getCantidad() {
        return cantidad;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    public String getPrecioUnidad() {
        return precioUnidad;
    }

    public void setPrecioUnidad(String precioUnidad) {
        this.precioUnidad = precioUnidad;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    @Override
    public String toString() {
        return "Juguete{" + "jugueteId=" + jugueteId + ", cantidad=" + cantidad + ", precioUnidad=" + precioUnidad + ", nombre=" + nombre + '}';
    }

}
