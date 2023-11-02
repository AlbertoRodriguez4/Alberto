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



        echo "";
        echo $SQL;
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
    public function añadirUsuario($filtros = array())
    {
        $b_texto = '';
        extract($filtros);
        $SQL = "INSERT INTO usuariosINSERT INTO `usuarios` (`id_Usuario`, `nombre`, `apellido_1`, `apellido_2`, `sexo`, `fecha_Alta`, `mail`, `movil`, `login`, `pass`, `activo`) VALUES ('','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]') ";
    }
}
