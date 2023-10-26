<?php
require_once 'modelos/Modelo.php';
require_once 'modelos/DAO.php';
class M_Usuarios extends Modelo {
    public $DAO;

public function __construct() {
    parent::__construct();
    $this->DAO = new DAO();
}

   public function buscarUsuarios($filtros=array()) {
    $b_texto = '';
    extract($filtros);
    if($b_texto != '') {
       $aTexto = explode(' ', $b_texto);
       foreach($aTexto as $palabra) {
        $SQL.=" apellido_1 LIKE '"+$palabra+"'";
       }
    }
    $SQL = "SELECT * FROM usuarios WHERE 1=1";
    $usuarios = $this->DAO->consultar($SQL);
    return $usuarios;
   } 
}

?>