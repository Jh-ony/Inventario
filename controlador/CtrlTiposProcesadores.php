<?php
require_once './core/Controlador.php';
require_once './modelo/TiposProcesadores.php';


class CtrlTiposProcesadores extends Controlador {
    public function index(){
        $obj = new TiposProcesadores();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Tipo Procesadores',
            'data'=>$data['data']
        ];
        $this->mostrar('TiposProcesadores/mostrar.php',$datos);
    }
    public function nuevo(){
        

        $this->mostrar('TiposProcesadores/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new TiposProcesadores($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $this->mostrar('TiposProcesadores/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
    

        $esNuevo=$_POST['esNuevo'];

        $obj = new TiposProcesadores($id,$nombre);

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
        $obj = new TiposProcesadores($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}