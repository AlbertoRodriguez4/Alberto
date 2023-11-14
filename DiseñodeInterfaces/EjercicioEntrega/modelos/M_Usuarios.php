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
            $SQL .= "AND login = '$usuario' AND pass = '$pass'";
            // Mostrar alerta
            $alerta = "Se ha logueado de forma correcta, bienvenido de nuevo $usuario";
            echo "<script>
                alert('$alerta');
                window.location.href = 'index.php';
            </script>";
        } else {
            // Mostrar alerta
            $alerta2 = "Usuario o contraseña incorrecta, inténtelo de nuevo";
            echo "<script>
                alert('$alerta2');
                window.location.href = 'login.php';
            </script>";
        }

        if ($b_texto != '') {
            $aTexto = explode(' ', $b_texto);
            $SQL .= "AND (1=2";
            foreach ($aTexto as $palabra) {
                $SQL .= " OR apellido_1 LIKE  '%$palabra%'";
                $SQL .= " OR apellido_2 LIKE  '%$palabra%'";
                $SQL .= " OR nombre LIKE  '%$palabra%'";
            }
            $SQL .= ' ) ';
        }

        //$SQL .= "SELECT * FROM usuarios WHERE 1=1";
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
                $SQL .= " OR movil LIKE '$telefono'";
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
    public function add($filtros = array())
    {
        $nombre = "";
        $apellido_1 = "";
        $apellido_2 = "";
        $sexo = "";
        $activo = "";
        $correo = "";
        $password = "";

        extract($filtros);
        $SQL = "INSERT INTO usuarios(`nombre`, `apellido_1`, `apellido_2`, `sexo`, `activo`, `login`, `pass`)";
        if ($nombre != "" & $apellido_1 != "" & $apellido_2 != "" & $sexo != "" & $activo != "") {
            $nombre = addslashes($nombre);
            $apellido_1 = addslashes($apellido_1);
            $apellido_2 = addslashes($apellido_2);
            $sexo = addslashes($sexo);
            $activo = addslashes($activo);
            $correo = addslashes($correo);
            $password = addslashes($password);

            $SQL .= "VALUES ('$nombre','$apellido_1','$apellido_2','$sexo','$activo','$nombre','$password')";
        }
        $usuarios = $this->DAO->insertar($SQL);
        
    }

}
