<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/SistemasOperativos.php';


class CtrlSistemasOperativos extends Controlador {
    public function index(){
        $obj = new SistemasOperativos();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Sistema Operativo',
            'data'=>$data['data']
        ];
        $home = $this->mostrar('SistemasOperativos/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function nuevo(){
        

        $home = $this->mostrar('SistemasOperativos/formulario.php',null,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new SistemasOperativos($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $home = $this->mostrar('SistemasOperativos/formulario.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
    

        $esNuevo=$_POST['esNuevo'];

        $obj = new SistemasOperativos($id,$nombre);

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
        $obj = new SistemasOperativos($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}