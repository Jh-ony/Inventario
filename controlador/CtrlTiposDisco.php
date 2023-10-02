<?php
require_once './core/Controlador.php';
require_once './modelo/TiposDisco.php';


class CtrlTiposDisco extends Controlador {
    public function index(){
        $obj = new TiposDisco();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Tipo Disco',
            'data'=>$data['data']
        ];
        $this->mostrar('TiposDisco/mostrar.php',$datos);
    }
    public function nuevo(){
        

        $this->mostrar('TiposDisco/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new TiposDisco($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $this->mostrar('TiposDisco/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
    

        $esNuevo=$_POST['esNuevo'];

        $obj = new TiposDisco($id,$nombre);

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
        $obj = new TiposDisco($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}