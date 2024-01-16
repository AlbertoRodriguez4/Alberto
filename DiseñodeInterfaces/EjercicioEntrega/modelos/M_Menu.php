<?php
require_once 'modelos/Modelo.php';
require_once 'modelos/DAO.php';
class M_Menu extends Modelo
{
    public $DAO;
    public function __construct()
    {
        parent::__construct();
        $this->DAO = new DAO();
    }
    public function verMenu() {
        $SQL = "SELECT * FROM menus";
        $menu = $this->DAO->consultar($SQL);
        return $menu;
    }
}
