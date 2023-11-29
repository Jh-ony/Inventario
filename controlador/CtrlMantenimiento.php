<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Mantenimiento.php';

class CtrlMantenimiento extends Controlador {
    public function index(){
        $obj = new Mantenimiento();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Mantenimiento',
            'data'=>$data['data']
        ];
        $home=$this->mostrar('mantenimiento/mostrar.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function nuevo(){
        $home=$this->mostrar('mantenimiento/formulario.php',null,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }

    public function editar(){
        $id = $_GET['id'];
        $obj = new Mantenimiento($id);
        $data = $obj->getRegistro();
        $datos = [
            'obj'=>$data['data'][0]
        ];
        $home=$this->mostrar('mantenimiento/formulario.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function guardar(){
        $id=$_POST['id'];
        $caso=$_POST['caso'];
        $esNuevo=$_POST['esNuevo'];

        $obj = new Mantenimiento($id,$caso);

        switch ($esNuevo) {
            case '0': # Editar
                $respuesta = $obj->actualizar();
                break;
            
            default:    #Nuevo
                $respuesta = $obj->guardar();
                break;
        }

        
        

        $this->index();

    }
    public function eliminar(){
        $id = $_GET['id'];
        $obj = new Mantenimiento($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}