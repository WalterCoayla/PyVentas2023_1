<?php
session_start();
require_once "./core/Controlador.php";
require_once "./modelos/Empleado.php";

class CtrlEmpleado extends Controlador
{
    public function index(){
        $accion = isset ($_GET['accion'])?$_GET['accion']:'mostrar';

        switch ($accion) {
            case 'login':
                $this->login();
                break;
            case 'validar':
                $this->validar();
                break;
            case 'logout':
                $this->logout();
                break;
            case 'nuevo':
                $this->nuevo();
                break;
            case 'editar':
                $this->editar();
                break;
            case 'eliminar':
                $this->eliminar();
                break;
            case 'guardar':
                $this->guardar();
                break;
            
            default:
                $this->select();
                break;
        }
        
    }

    private function getMenu(){
        return array(
            'CtrlMarca'=>'Adm. Marcas',
            'CtrlProducto'=>'Productos',
            'CtrlEmpresa'=>'Empresas',
        );
    }

    public function logout(){
        session_unset();
        session_destroy();
        $this->login();
        exit();
    }
    public function login(){
        $login = $this->mostrar('empleados/login.php','',true);
        $datos =array(
            'contenido'=>$login

        );
        $this->mostrar('principal.php',$datos);
    }
    public function validar(){
        # echo "Estamos validando...";
        $login= $_POST['email'];
        $password= $_POST['clave'];
        $obj = new Empleado();
        $validado = $obj->validar($login, $password);

        if (is_null($validado['data'])){
            header("Location: ?ctrl=CtrlEmpleado&accion=login");
            exit();
        } else {
            $usuario= $validado['data'][0]['nombres'] .' '. $validado['data'][0]['apellidos'];
            $_SESSION['usuario']=$usuario;
            $_SESSION['menu']= $this->getMenu();
            header("Location: ?ctrl=CtrlPrincipal");
        }
        

    }
    public function editar(){
        /* $id = $_GET['id'];

        $obj = new Producto($id);
        $obj = $obj->getBy('idproductos',$id);
        $marcas = $this->getMarcas();
        $datos = array(
            'datos'=>$obj['data'][0],
            'marcas'=>$marcas['data']
        );
        $this->mostrar('productos/formNuevo.php',$datos); */
    }

    public function guardar(){
        /* $id = $_POST['id'];
        $nombre= $_POST['nombre'];
        $descripcion= $_POST['descripcion'];
        $pu= $_POST['pu'];
        $stock= $_POST['stock'];
        $imagen= $_POST['imagen'];
        $idMarca= $_POST['idmarcas'];

        $op = $_POST['op'];
        $obj = new Producto($id, $nombre, $descripcion, $pu, $stock, $imagen, $idMarca);
        if ($op ==0){
            $obj->guardar();  //Guardar Nuevo
        } else {
            $obj->actualizar();// Editar (UPDATE)
        }
        
        $this->select(); */
    }

    private function getMarcas(){
        /* $m = new Marca();
        return $m->getAll(); */
    }
    public function nuevo(){
        
        /* $marcas = $this->getMarcas();
        $datos = array(
            'marcas'=>$marcas['data']
        );
        $this->mostrar('productos/formNuevo.php',$datos); */
    }

    public function eliminar(){
        /* $id = $_GET['id'];
        $obj = new Producto($id);
        $obj->eliminar();
        # var_dump($obj->eliminar()); exit;
        $this->select(); */
    }

    public function select(){
        /* $obj = new Producto();
        $objs= $obj->getAll();

        // var_dump($objs);exit;

        $datos = array(
            'datos'=>$objs['data'],
            'msg'=>$objs['msg']
        );

        $this->mostrar('productos/mostrar.php',$datos); */
    }
}