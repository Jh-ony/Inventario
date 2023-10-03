<?php
require_once './core/Controlador.php';
require_once './modelo/DetallesAsignacion.php';


class CtrlDetallesAsignacion extends Controlador {
    public function index(){
        $obj = new DetallesAsignacion();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'DetallesAsignacion',
            'data'=>$data['data']
        ];

        $home = $this->mostrar('DetallesAsignacion/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function nuevo(){

        $home= $this->mostrar('DetallesAsignacion/formulario.php',null,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new DetallesAsignacion($id);
        $data = $obj->getRegistro();
        $datos = [
            'obj'=>$data['data'][0]
        ];
        $home=$this->mostrar('DetallesAsignacion/formulario.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $esNuevo=$_POST['esNuevo'];

        $obj = new DetallesAsignacion($id,$nombre);

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
        $obj = new DetallesAsignacion($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}
        /*
        $this->mostrar('DetallesAsignacion/mostrar.php',$datos);
    }
    public function nuevo(){
        

        $this->mostrar('DetallesAsignacion/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new DetallesAsignacion($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $this->mostrar('DetallesAsignacion/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $observaciones=$_POST['observaciones'];
    

        $esNuevo=$_POST['esNuevo'];

        $obj = new DetallesAsignacion($id,$observaciones);

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
        $obj = new DetallesAsignacion($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}
*/
?>