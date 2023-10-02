<?php
require_once './core/Controlador.php';
require_once './modelo/SwAntivirus.php';


class CtrlSwAntivirus extends Controlador {
    public function index(){
        $obj = new SwAntivirus();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Tipo Antivirus',
            'data'=>$data['data']
        ];
        $this->mostrar('SwAntivirus/mostrar.php',$datos);
    }
    public function nuevo(){
        

        $this->mostrar('SwAntivirus/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new SwAntivirus($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $this->mostrar('SwAntivirus/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
    

        $esNuevo=$_POST['esNuevo'];

        $obj = new SwAntivirus($id,$nombre);

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
        $obj = new SwAntivirus($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}