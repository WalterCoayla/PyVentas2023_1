<?php
session_start();
require_once "./core/Controlador.php";
class CtrlPrincipal extends Controlador{
    public function index(){
        $home = Vista::mostrar('home.php','',true);

        $datos = array(
            'contenido'=>$home
        );
        
        $this->mostrar('principal.php',$datos);
    }
}