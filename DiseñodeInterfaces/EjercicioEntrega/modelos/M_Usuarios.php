<?php
require_once 'modelos/Modelo.php';
require_once 'modelos/DAO.php';
class M_Usuarios extends Modelo
{
    public $DAO;

    public function __construct()
    {
        parent::__construct();
        $this->DAO = new DAO();
    }

    public function buscarUsuarios($filtros = array())
    {
        $b_texto = '';
        $usuario = '';
        $pass = '';
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 ";

        if ($usuario != "" && $pass != "") {
            $usuario = addslashes($usuario);
            $pass = addslashes($pass);

            $SQL .= " AND login = '$usuario' AND pass = '$pass'";

            $usuarios = $this->DAO->consultar($SQL);
        }

        if ($b_texto != '') {
            $aTexto = explode(' ', $b_texto);
            $SQL .= " AND (1=2";
            foreach ($aTexto as $palabra) {
                $SQL .= " OR apellido_1 LIKE '%$palabra%'";
                $SQL .= " OR apellido_2 LIKE '%$palabra%'";
                $SQL .= " OR nombre LIKE '%$palabra%'";
            }
            $SQL .= ' ) ';
        }

        $usuarios = $this->DAO->consultar($SQL);



        return $usuarios;
    }

    public function buscarUsuariosPaginador()
    {
        $valorSuma = 0;
        $valorSuma * 10;
        //sentencia: SELECT * FROM `usuarios` LIMIT 10 OFFSET 10;

    }
    function subirNumero($filtros = array())
    {
        extract($filtros);

        // Aquí deberías utilizar el nuevo valor en tu consulta SQL o en cualquier lógica necesaria
        $nuevoValor = isset($_GET['nuevoValor']) ? $_GET['nuevoValor'] : null;
        $cantidadXd = isset($_GET['paginaContenido']) ? $_GET['paginaContenido'] : null;
        // Calcular el nuevo offset basado en $nuevoValor
        $nuevoNuevoValor = $nuevoValor * 10;

        // Si cantidadXd está vacío, establecerlo en 10 por defecto
        $cantidadXd = empty($cantidadXd) ? 10 : $cantidadXd;

        // Utilizar $nuevoNuevoValor y $cantidadXd en tu consulta SQL
        $SQL = "SELECT * FROM `usuarios` LIMIT $cantidadXd OFFSET $nuevoNuevoValor;";
        $usuarios = $this->DAO->consultar($SQL);
        $cantidadUsuarios = count($usuarios);

        echo "Número de usuarios: " . $cantidadUsuarios;
        return $usuarios;
    }

    function bajarNumero($filtros = array())
    {
        extract($filtros);

        // Aquí deberías utilizar el nuevo valor en tu consulta SQL o en cualquier lógica necesaria
        $nuevoValor = isset($_GET['nuevoValor']) ? $_GET['nuevoValor'] : null;
        $cantidadXd = isset($_GET['paginaContenido']) ? $_GET['paginaContenido'] : null;
        echo $cantidadXd;

        // Calcular el nuevo ofjfset basado en $nuevoValor
        $nuevoNuevoValor = $nuevoValor * 10;
        if ($cantidadXd != "") {
            // Utilizar $nuevoNuevoValor en tu consulta SQL
            $SQL = "SELECT * FROM `usuarios` LIMIT $cantidadXd OFFSET $nuevoNuevoValor;";
            $usuarios = $this->DAO->consultar($SQL);
            return $usuarios;
        } else {
            $SQL = "SELECT * FROM `usuarios` LIMIT 10 OFFSET $nuevoNuevoValor;";
            $usuarios = $this->DAO->consultar($SQL);
            return $usuarios;
        }
    }



    public function buscarPorSexo($filtros = array())
    {
        $b_texto = '';
        $usuario = '';
        $pass = '';
        $sexo = '';
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 ";


        if ($b_texto != '') {
            $aTexto = explode(' ', $b_texto);
            $SQL .= "AND (1=2";
            foreach ($aTexto as $sexo) {
                $SQL .= " OR sexo LIKE '$sexo'";
            }
            $SQL .= ' ) ';
        }
        echo "";
        echo $SQL;
        //$SQL .= "SELECT * FROM usuarios WHERE 1=1";
        $usuarios = $this->DAO->consultar($SQL);
        return $usuarios;
    }
    public function buscarPorSexoMasculino($filtros = array())
    {
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 AND (1=2 OR sexo LIKE 'H' ) ";

        //$SQL .= "SELECT * FROM usuarios WHERE 1=1";
        $usuarios = $this->DAO->consultar($SQL);
        return $usuarios;
    }
    public function buscarTodosUsuarios($filtros = array())
    {
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 ";

        //$SQL .= "SELECT * FROM usuarios WHERE 1=1";
        $usuarios = $this->DAO->consultar($SQL);
        return $usuarios;
    }
    public function buscarPorSexoFemenino($filtros = array())
    {
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 AND (1=2 OR sexo LIKE 'M' ) ";
        //$SQL .= "SELECT * FROM usuarios WHERE 1=1";
        $usuarios = $this->DAO->consultar($SQL);
        return $usuarios;
    }
    public function buscarTelefono($filtros = array())
    {
        $b_texto2 = "";
        $telefono = "";
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 ";
        if ($b_texto2 != '') {
            $aTexto = explode(' ', $b_texto2);
            $SQL .= "AND (1=2";
            foreach ($aTexto as $telefono) {
                $SQL .= " OR movil LIKE '%$telefono%'";
            }
            $SQL .= ' ) ';
        }
        $usuarios = $this->DAO->consultar($SQL);
        return $usuarios;
    }
    public function buscarPorSiActividad($filtros = array())
    {
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 AND (1=2 OR activo LIKE 'S' ) ";

        //$SQL .= "SELECT * FROM usuarios WHERE 1=1";
        $usuarios = $this->DAO->consultar($SQL);
        return $usuarios;
    }
    public function buscarPorNoActividad($filtros = array())
    {
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 AND (1=2 OR activo LIKE 'N' ) ";
        //$SQL .= "SELECT * FROM usuarios WHERE 1=1";
        $usuarios = $this->DAO->consultar($SQL);
        return $usuarios;
    }
    public function gestionarUsuario($filtros = array())
    {
        $modId = "";
        $nombre = "";
        $apellido_1 = "";
        $apellido_2 = "";
        $sexo = "";
        $activo = "";
        $correo = "";
        $password = "";

        extract($filtros);

        // Validación si el nombre ya existe
        if (!empty($nombre)) {
            $usuarioExistente = $this->DAO->consultar("SELECT * FROM usuarios WHERE nombre='$nombre'");
            if (!empty($usuarioExistente)) {
                echo '<script>console.log("Estás intentando insertar a un usuario que ya existe");</script>';
            }
        }

        // Validación de datos obligatorios
        if (empty($nombre) || empty($apellido_1) || empty($apellido_2) || empty($sexo) || empty($activo)) {
            return 'Faltan datos obligatorios para gestionar el usuario';
        }

        // Limpiar y escapar datos
        $nombre = addslashes($nombre);
        $apellido_1 = addslashes($apellido_1);
        $apellido_2 = addslashes($apellido_2);
        $sexo = addslashes($sexo);
        $activo = addslashes($activo);
        $correo = addslashes($correo);
        $password = addslashes($password);

        // Construir la consulta SQL
        if (empty($modId)) {
            // Inserción
            $SQL = "INSERT INTO usuarios(`nombre`, `apellido_1`, `apellido_2`, `sexo`, `activo`, `login`, `pass`) VALUES ('$nombre','$apellido_1','$apellido_2','$sexo','$activo','$correo','$password')";
        } else {
            // Actualización
            $SQL = "UPDATE `usuarios` SET `nombre`='$nombre',`apellido_1`='$apellido_1',`apellido_2`='$apellido_2',`sexo`='$sexo',`mail`='$correo',`login`='$correo',`pass`='$password',`activo`='$activo' WHERE id_Usuario=$modId";
        }

        // Ejecutar la consulta SQL
        $usuarios = $this->DAO->insertar($SQL);

        // Verificar si la operación fue exitosa
        if ($usuarios != null) {
            return 'Operación realizada correctamente';
        } else {
            return 'La operación no se ha realizado';
        }
    }
    public function add($filtros = array())
    {
        $nombre = "";
        $apellido_1 = "";
        $apellido_2 = "";
        $sexo = "";
        $activo = "";
        $correo = "";
        $password = "";
        $login = "";

        extract($filtros);

        // Generar una contraseña aleatoria si no se proporciona una
        $password = $this->generarContrasena();

        $nombre = addslashes($nombre);
        $apellido_1 = addslashes($apellido_1);
        $apellido_2 = addslashes($apellido_2);
        $sexo = addslashes($sexo);
        $activo = addslashes($activo);
        $correo = addslashes($correo);
        $password = addslashes($password);
        $login = addslashes($login);

        $password = $this->generarContrasena();
        $comprobarLogin = $this->DAO->insertar("SELECT COUNT(login) AS numLogins FROM usuarios WHERE login = '$login'");
        $numLogins = $comprobarLogin[0]['numLogins'];

        if ($numLogins == 0) {
            $SQL = "INSERT INTO usuarios(`nombre`, `apellido_1`, `apellido_2`, `sexo`, `activo`, `login`, `mail`, `pass`)";


            if ($nombre != "" && $apellido_1 != "" && $apellido_2 != "" && $sexo != "" && $activo != "") {
                $SQL .= " VALUES ('$nombre','$apellido_1','$apellido_2','$sexo','$activo','$login','$correo','$password')";
            }

            $usuarios = $this->DAO->insertar($SQL);
            // Aquí debes manejar de manera apropiada la respuesta, puede ser un mensaje de éxito o redirección
            echo $usuarios;
        } else {
        }
    }

    public function Editar($filtros = array())
    {
        $modId = "";
        $nombre = "";
        $apellido_1 = "";
        $apellido_2 = "";
        $sexo = "";
        $activo = "";
        $correo = "";
        $login = "";

        extract($filtros);
        $usuarioId = addslashes($usuarioId);

        // Obtener valores de los desplegables
        $activo = addslashes($activo);
        $sexo = addslashes($sexo);

        $SQL = "UPDATE `usuarios` SET `nombre`='$nombre',`apellido_1`='$apellido_1',`apellido_2`='$apellido_2',`sexo`='$sexo',`mail`='$correo',`login`='$login',`activo`='$activo' WHERE id_Usuario=$modId";

        $usuarios = $this->DAO->actualizar($SQL);
        // Puedes retornar algún tipo de respuesta según tus necesidades, por ejemplo, un mensaje de éxito o error
        return $usuarios;
    }

    function generarContrasena($longitud = 12)
    {
        // Caracteres permitidos en la contraseña
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';

        // Mezclar los caracteres
        $caracteresMezclados = str_shuffle($caracteres);

        // Obtener la subcadena de la longitud deseada
        $contrasena = substr($caracteresMezclados, 0, $longitud);

        return $contrasena;
    }
}
