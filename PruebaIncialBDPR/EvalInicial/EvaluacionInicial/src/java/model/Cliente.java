package java.model;

public class Cliente {
    private String DNI;
    private String name;
    private String surname;
    private String fechaNac;
    private String direccion;

    public Cliente(String DNI, String name, String surname, String fechaNac, String direccion) {
        this.DNI = DNI;
        this.name = name;
        this.surname = surname;
        this.fechaNac = fechaNac;
        this.direccion = direccion;
    }
    public Cliente () {}

    public String getDNI() {
        return DNI;
    }

    public void setDNI(String DNI) {
        this.DNI = DNI;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getSurname() {
        return surname;
    }

    public void setSurname(String surname) {
        this.surname = surname;
    }

    public String getFechaNac() {
        return fechaNac;
    }

    public void setFechaNac(String fechaNac) {
        this.fechaNac = fechaNac;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    @Override
    public String toString() {
        return "Cliente{" +
                "DNI='" + DNI + '\'' +
                ", name='" + name + '\'' +
                ", surname='" + surname + '\'' +
                ", fechaNac='" + fechaNac + '\'' +
                ", direccion='" + direccion + '\'' +
                '}';
    }
}
