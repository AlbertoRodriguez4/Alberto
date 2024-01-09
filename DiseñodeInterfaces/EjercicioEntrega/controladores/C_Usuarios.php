<?php
require_once 'controladores/Controlador.php';
require_once 'vistas/Vista.php';
require 'modelos/M_Usuarios.php';
class C_Usuarios extends Controlador
{
    private $modelo;

    public function __construct()
    {
        parent::__construct();
        $this->modelo = new M_Usuarios();
    }

    public function validarUsuario($filtros)
    {
        //$usuario='';
        //$pass='';
        //extract($datos);
        //$valido='Error al loguear';
        //if($usuario=='alberto' && $pass=='1234'){
        // $_SESSION['usuario']=$usuario;
        //$valido='Logueado correctamente';   
        //}
        $valido = "N";
        $usuarios = $this->modelo->buscarUsuarios($filtros);
        if (!empty($usuarios)) {
            $valido = "S";
            $_SESSION['usuario'] = $usuarios[0]['login'];
        }
    }

    public function getVistaUsuarios()
    {
        Vista::render('vistas/Usuarios/V_Usuarios.php');
    }
    public function buscarUsuarios($filtros = array())
    {
        $usuarios = $this->modelo->buscarUsuarios($filtros);
        //echo json_encode($usuarios);
        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $usuarios, array('usuarios' => $usuarios)));
    }
    public function buscarTodosUsuarios($filtros = array())
    {
        $usuarios = $this->modelo->buscarUsuarios($filtros);
        //echo json_encode($usuarios);
        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $usuarios, array('usuarios' => $usuarios)));
    }
    public function buscarPorSexoMasculino($filtros = array())
    {
        $usuarios = $this->modelo->buscarPorSexoMasculino($filtros);
        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $usuarios));
    }
    public function buscarPorSexoFemenino($filtros = array())
    {
        $usuarios = $this->modelo->buscarPorSexoFemenino($filtros);
        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $usuarios));
    }
    public function buscarTelefono($filtros = array())
    {
        $usuarios = $this->modelo->buscarTelefono($filtros);
        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $usuarios));
    }
    public function buscarPorSiActividad($filtros = array())
    {
        $usuarios = $this->modelo->buscarPorSiActividad($filtros);
        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $usuarios));
    }
    public function buscarPorNoActividad($filtros = array())
    {
        $usuarios = $this->modelo->buscarPorNoActividad($filtros);
        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $usuarios));
    }
    public function add($filtros = array())
    {
        $usuarios = $this->modelo->add($filtros);
    }
    public function Editar($filtros = array())
    {
        $usuario = $this->modelo->Editar($filtros);
    }
    public function subirNumero($filtros = array())
    {
        $resultado = $this->modelo->subirNumero($filtros);
        $nuevoValor = isset($_GET['nuevoValor']) ? $_GET['nuevoValor'] : null;
        $cantidadXd = isset($_GET['paginaContenido']) ? $_GET['paginaContenido'] : null; // Agregando el campo cantidadXd

        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $resultado['usuarios'], 'nuevoValor' => $nuevoValor, 'cantidadXd' => $cantidadXd, 'cantidadFinal' => $resultado['cantidadFinal']));
    }
    public function bajarNumero($filtros = array())
    {
        $resultado = $this->modelo->bajarNumero($filtros);
        $nuevoValor = isset($_GET['nuevoValor']) ? $_GET['nuevoValor'] : null;
        $cantidadXd = isset($_GET['paginaContenido']) ? $_GET['paginaContenido'] : null; // Agregando el campo cantidadXd

        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $resultado['usuarios'], 'nuevoValor' => $nuevoValor, 'cantidadXd' => $cantidadXd, 'cantidadFinal' => $resultado['cantidadFinal']));
    }
    public function primeraPagina($filtros = array())
    {
        extract($filtros);

        $resultado = $this->modelo->primeraPagina($filtros);
        $yoquese = isset($_GET['yoquese']) ? $_GET['yoquese'] : null;

        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $resultado['usuarios'], 'yoquese' => $yoquese));

    }
    public function ultimaPagina($filtros = array())
    {
        extract($filtros);

        $resultado = $this->modelo->ultimaPagina($filtros);
        $yoquese = isset($_GET['yoquese']) ? $_GET['yoquese'] : null;

        $datosParaCliente = [
            'usuarios' => $resultado['usuarios'],
            'yoquese' => $yoquese,
            'cantidadFinal' => $resultado['cantidadFinal']
        ];
        echo json_encode($datosParaCliente);

        Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios' => $resultado['usuarios'], 'datosParaCliente' => $datosParaCliente));

        // Devolver datos en formato JSON

    }


}

