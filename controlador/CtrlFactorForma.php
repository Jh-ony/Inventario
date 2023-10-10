<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/FactorForma.php';

class CtrlFactorForma extends Controlador {
    public function index(){
        $obj = new FactorForma();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Factores de Forma',
            'data'=>$data['data']
        ];
        $home=$this->mostrar('factoresForma/mostrar.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function nuevo(){
        $home=$this->mostrar('factoresForma/formulario.php',null,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }

    public function editar(){
        $id = $_GET['id'];
        $obj = new FactorForma($id);
        $data = $obj->getFactor();
        $datos = [
            'obj'=>$data['data'][0]
        ];
        $home=$this->mostrar('factoresForma/formulario.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $esNuevo=$_POST['esNuevo'];

        $obj = new FactorForma($id,$nombre);

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
        $obj = new FactorForma($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}