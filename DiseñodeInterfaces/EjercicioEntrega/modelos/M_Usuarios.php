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
}
