<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Desplazamientos.php';
require_once './modelo/ServidoresPublicos.php';


class CtrlDesplazamientos extends Controlador {
    public function index(){
        $obj = new Desplazamientos();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Desplazamientos',
            'data'=>$data['data']
        ];
        $home = $this->mostrar('Desplazamientos/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function nuevo(){
        
        $objSeOrigen = new ServidoresPublicos;
        $objSeDestino = new ServidoresPublicos;
        $dataSeOrigen = $objSeOrigen->mostrar();
        $dataSeDestino = $objSeDestino->mostrar();
        $datos = [

                'seOrigen'=>$dataSeOrigen['data'],
                'seDestino'=>$dataSeDestino['data']
            ]; 
        

        $home = $this->mostrar('Desplazamientos/formulario.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Desplazamientos($id);
        $data = $obj->getRegistro();
        
        $objSeOrigen = new ServidoresPublicos;
        $objSeDestino = new ServidoresPublicos;
        $dataSeOrigen = $objSeOrigen->mostrar();
        $dataSeDestino = $objSeDestino->mostrar();


        $datos = [
            'obj'=>$data['data'][0],
            'seOrigen'=>$dataSeOrigen['data'],
            'seDestino'=>$dataSeDestino['data']
        ];
        $home = $this->mostrar('Desplazamientos/formulario.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $fecha=$_POST['fecha'];
        $idServidorOrigen=$_POST['idServidorOrigen'];
        $idServidorDestino=$_POST['idServidorDestino'];


        $esNuevo=$_POST['esNuevo'];

        $obj = new Desplazamientos($id,$fecha,$idServidorOrigen,$idServidorDestino);

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