<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Equipos.php';


class CtrlEquipos extends Controlador {
    public function index(){
        $obj = new Equipos();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Equipos',
            'data'=>$data['data']
        ];
        $home = $this->mostrar('Equipos/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

        //$this->mostrar('Equipos/mostrar.php',$datos);
    }
    public function nuevo(){
        $home= $this->mostrar('Equipos/formulario.php',null,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Equipos($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $home=$this->mostrar('Equipos/formulario.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function guardar(){
        $id=$_POST['id'];
        
     
        $fechaCompra = $_POST['fechaCompra'];
        $codigoPatrimonial = $_POST['codigoPatrimonial'];
        $color = $_POST['color'];
        $observaciones = $_POST['observaciones'];
        $foto = $_POST['foto'];
        $valorCompra = $_POST['valorCompra'];
        $numeroPECOSA = $_POST['numeroPECOSA'];
        $numeroOC = $_POST['numeroOC'];
        $dimensiones = $_POST['dimensiones'];
    

    

        $esNuevo=$_POST['esNuevo'];

        $obj = new Equipos($id,$fechaCompra,$codigoPatrimonial,$color,$observaciones,$foto,$valorCompra,$numeroPECOSA,$numeroOC,$dimensiones);

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
        $obj = new Equipos($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}