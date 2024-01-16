import java.util.Scanner;

// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("¿Cuántas personas van a cantar?");
        int numero = scanner.nextInt();

        if (numero > 0) {
            HiloCantante[] hilos = new HiloCantante[numero];
            String cancionTexto[] = {
                    "Tú no lo sabes, te estoy vigilando\n",
                    "Desde la distancia me estoy acercando\n",
                    "Soy una sombra y tú no te das cuenta\n",
                    "Hola, ¿qué tal? ¡Date la vuelta!",

                    "¡Bum!",
                    "Llegó la hora de volar",
                    "Acércate a mí porque vas a explotar\n",
                    "¿Qué me vas a hacer? ¿Qué me vas a morder?\n",

                    "Todo el mundo que me ve solo sabe correr\n",
                    "Vacas, caballos, pollos y ovejas\n",
                    "Quiero cenar tu cabeza en bandeja\n",
                    "Mira cómo tu cuerpo se aleja\n",
                    "Se han acabado las quejas\n"
            };

            Cancion cancion = new Cancion(cancionTexto, "Creeper vs Zombies");

            for (int i = 0; i < numero; i++) {
                hilos[i] = new HiloCantante(i + 1, cancion);
                hilos[i].run();
            }
        } else {
            System.out.println("Debe haber al menos un hilo para cantar.");
        }
    }
}
