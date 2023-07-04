<?php
require_once "./core/Modelo.php";
class Empleado extends Modelo
{
    private $_id;
    private $_nombre;
    private $_apellido;

    private $_login;
    private $_password;

    private $_tabla = 'empleados';

    public function __construct($id=null, $nombre=null, 
                    $apellido=null, $login=null, $password=null){
        $this->_id = $id;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_login = $login;
        $this->_password = $password;

        parent::__construct($this->_tabla);
    }
    public function validar($login, $password){
        $this->_sql->addWhere("`login`='$login'");
        $this->_sql->addWhere("`password`='$password'");
        # echo $this->_sql;exit;
        return $this->_bd->ejecutar($this->_sql);
    }
    public function eliminar(){
        
       // return $this->deleteBy('idmarcas',$this->_id);
    }
    public function guardar(){
       /*  $datos = array(
            'idmarcas'=>$this->_id,
            'nombre'=>"'$this->_nombre'"
        );

        return $this->insert($datos); */
    }

    public function actualizar(){
        /* $datos = array(
            'nombre'=>"'$this->_nombre'"
        );
        $wh="idmarcas='$this->_id'";
        
        return $this->update($wh, $datos); */
    }
    public function getId(){
        return $this->_id;
    }
}