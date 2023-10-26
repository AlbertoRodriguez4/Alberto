<?php
    require_once 'controladores/Controlador.php';
    require_once 'vistas/Vista.php';
    require 'modelos/M_Usuarios.php';
    class C_Usuarios extends Controlador{
        private $modelo;

        public function __construct(){
            parent::__construct();
               $this->modelo = new M_Usuarios();
        }

        public function validarUsuario($filtros){
            //$usuario='';
            //$pass='';
            //extract($datos);
            //$valido='Error al loguear';
            //if($usuario=='alberto' && $pass=='1234'){
               // $_SESSION['usuario']=$usuario;
                //$valido='Logueado correctamente';   
            //}
            $valido = "N";
            $usuarios =$this->modelo->buscarUsuarios($filtros);
            if(!empty($usuarios)){
                $valido = "S";
                $_SESSION['usuario'] = $usuarios[0]['login'];
            }
            echo $valido;
        }

        public function getVistaUsuarios(){
            Vista::render('vistas/Usuarios/V_Usuarios.php');
        }
        public function buscarUsuarios($filtros = array()) {
            $usuarios = $this->modelo->buscarUsuarios($filtros);
            //echo json_encode($usuarios);
            Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('usuarios'=>$usuarios, array('usuarios'=>$usuarios)));
        }
        public function buscarPorSexo($filtros = array()) {
            $genero = $this->modelo->buscarPorSexo($filtros);
            //echo json_encode($usuarios);
            Vista::render('vistas/Usuarios/V_Usuarios_Listado.php', array('genero'=>$genero, array('genero'=>$genero)));
        }
    }
