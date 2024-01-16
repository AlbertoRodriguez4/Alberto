public class Cancion {
    public String estrofas[];
    public String titulo;

    public Cancion(String[] estrofas, String titulo) {
        this.estrofas = estrofas;
        this.titulo = titulo;
    }

    public String[] getEstrofas() {
        return estrofas;
    }

    public void setEstrofas(String[] estrofas) {
        this.estrofas = estrofas;
    }

    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }
}
