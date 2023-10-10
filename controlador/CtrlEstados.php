<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Estados.php';


class CtrlEstados extends Controlador {
    public function index(){
        $obj = new Estados();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Estados',
            'data'=>$data['data']
        ];
        $home = $this->mostrar('estados/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function nuevo(){

        $home= $this->mostrar('estados/formulario.php',null,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Estados($id);
        $data = $obj->getRegistro();
        $datos = [
            'obj'=>$data['data'][0]
        ];
        $home=$this->mostrar('estados/formulario.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $esNuevo=$_POST['esNuevo'];

        $obj = new Estados($id,$nombre);

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
        $obj = new Estados($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}
        /*
        $this->mostrar('Estados/mostrar.php',$datos);
    }
    public function nuevo(){
        

        $this->mostrar('Estados/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Estados($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $this->mostrar('Estados/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
    

        $esNuevo=$_POST['esNuevo'];

        $obj = new Estados($id,$nombre);

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
        $obj = new Estados($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}
*/
?>