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
    public function buscarPorSexoMasculino($filtros = array()) {
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 AND (1=2 OR sexo LIKE 'H' ) ";

        //$SQL .= "SELECT * FROM usuarios WHERE 1=1";
        $usuarios = $this->DAO->consultar($SQL);
        return $usuarios;
    }
    public function buscarPorSexoFemenino($filtros = array()) {
        extract($filtros);
        $SQL = "SELECT * FROM usuarios WHERE 1=1 AND (1=2 OR sexo LIKE 'M' ) ";
        //$SQL .= "SELECT * FROM usuarios WHERE 1=1";
        $usuarios = $this->DAO->consultar($SQL);
        return $usuarios;
    }
}
