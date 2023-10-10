<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/AsignacionBienes.php';
require_once './modelo/Estados.php';

class CtrlAsignacionBienes extends Controlador {
    public function index(){
        $obj = new AsignacionBienes();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'AsignacionBienes',
            'data'=>$data['data']
        ];

        $home = $this->mostrar('AsignacionBienes/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function nuevo(){

        $home= $this->mostrar('AsignacionBienes/formulario.php',null,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new AsignacionBienes($id);
        $data = $obj->getRegistro();
        $datos = [
            'obj'=>$data['data'][0]
        ];
        $home=$this->mostrar('AsignacionBienes/formulario.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function guardar(){
        $id=$_POST['id'];
        $fecha=$_POST['fecha'];
        $esNuevo=$_POST['esNuevo'];

        $obj = new AsignacionBienes($id,$fecha);

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
        $obj = new AsignacionBienes($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}
        /*
        $this->mostrar('AsignacionBienes/mostrar.php',$datos);
    }
    public function nuevo(){
        $obj = new Estados;
        $estado = $obj->mostrar();
        $datos= [
            'titulo'=>'Nuevo Periferico',
            'estado'=>$estado['data'],
            
        ];

        $this->mostrar('AsignacionBienes/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new AsignacionBienes($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $this->mostrar('AsignacionBienes/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $fecha=$_POST['fecha'];
        $idServicioPublico=$_POST['idServicioPublico'];
        $idEstado=$_POST['idEstado'];
        $idJefeInmediato=$_POST['idJefeInmediato'];

        $esNuevo=$_POST['esNuevo'];

        $obj = new AsignacionBienes($id,$fecha,$idServicioPublico=null,$idEstado=null,$idJefeInmediato=null);

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
        $obj = new AsignacionBienes($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}
*/
?>