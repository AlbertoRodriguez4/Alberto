<?php
require_once 'controladores/Controlador.php';
require_once 'vistas/Vista.php';
require 'modelos/M_Menu.php';
class C_Menus extends Controlador
{
    private $modelo;
    public function __construct()
    {
        parent::__construct();
        $this->modelo = new M_Menu();
    }
    public function verMenu()
    {
        $menu = $this->modelo->verMenu();
        //echo json_encode($usuarios);
        Vista::render('vistas/Usuarios/V_Menu_Listado.php', array('menu' => $menu, array('menu' => $menu)));

        
    }
}
