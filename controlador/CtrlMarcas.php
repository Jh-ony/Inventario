<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Marcas.php';


class CtrlMarcas extends Controlador {
    public function index(){
        $obj = new Marcas();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Marcas',
            'data'=>$data['data']
        ];
        $home = $this->mostrar('Marcas/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function nuevo(){
        

        $home = $this->mostrar('Marcas/formulario.php',null,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Marcas($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $home = $this->mostrar('Marcas/formulario.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
    

        $esNuevo=$_POST['esNuevo'];

        $obj = new Marcas($id,$nombre);

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
        $obj = new Marcas($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}