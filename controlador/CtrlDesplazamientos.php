<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Desplazamientos.php';


class CtrlDesplazamientos extends Controlador {
    public function index(){
        $obj = new Desplazamientos();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Desplazamientos',
            'data'=>$data['data']
        ];
        $this->mostrar('Desplazamientos/mostrar.php',$datos);
    }
    public function nuevo(){
        

        $this->mostrar('Desplazamientos/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Desplazamientos($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $this->mostrar('Desplazamientos/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $fecha=$_POST['fecha'];
    

        $esNuevo=$_POST['esNuevo'];

        $obj = new Desplazamientos($id,$fecha);

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
        $obj = new Desplazamientos($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}