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
                    "Se han acabado las quejas\n",
                    "La batalla ya ha empezado, en un mundo muy cuadrado\n",
                    "Creepers y Zombies a línea de fuego donde sangre derramo\n",
                    "Eh, eh, mírame de frente, no me escondo, te deparará la muerte\n",
                    "We, eh, dentro del mundo de Minecraft sí que puedo valerme\n",
                    "Yo no tengo brazos, pero no hacen falta\n",
                    "Solo un cabezazo, con eso ya me basta\n",
                    "Llámame pirómano, el que todo lo devasta\n",
                    "No sería tu amigo ni aunque me pagaran pasta\n",
                    "No hay nada que pare esta tromba\n",
                    "Te van a caer meteoritos como bombas\n",
                    "Eso que vuela no se llama avión\n",
                    "Eso que vuela es un Zombie Volador\n",
                    "Chica, ven aquí y mueve el pompis",
                    "También le meto autotune como Stephen Hawking",
                    "Te desmonto como un Playmobil",
                    "Acércate, explótame, brum, brum, brum",
                    "Vas a perder delante de todo Youtube",
                    "Acércate, explótame, brum, brum, brum",
                    "Vas a perder delante de todo Youtube",
                    "La-la-la batalla ya ha empezado, en un mundo muy cuadrado",
                    "Creepers y Zombies a línea de fuego donde sangre derramo",
                    "Eh, eh, mírame de frente, no me escondo, te deparará la muerte",
                    "We, eh, dentro del mundo de Minecraft sí que puedo valerme",
                    "La batalla ya ha empezado, en un mundo muy cuadrado",
                    "Creepers y Zombies a línea de fuego donde sangre derramo",
                    "Eh, eh, mírame de frente, no me escondo, te deparará la muerte",
                    "We, eh, dentro del mundo de Minecraft sí que puedo valerme"
            };

            Cancion cancion = new Cancion(cancionTexto, "Creeper vs Zombies");

            for (int i = 0; i < numero; i++) {
                hilos[i] = new HiloCantante(i + 1, cancion);
                hilos[i].start();
            }
        } else {
            System.out.println("Debe haber al menos un hilo para cantar.");
        }
    }
}
