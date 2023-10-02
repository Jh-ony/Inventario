<?php
require_once './core/Controlador.php';
require_once './modelo/PCs.php';


class CtrlPCs extends Controlador {
    public function index(){
        $obj = new PCs();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'PCs',
            'data'=>$data['data']
        ];
        $this->mostrar('PCs/mostrar.php',$datos);
    }
    public function nuevo(){
        

        $this->mostrar('PCs/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new PCs($id);
        $data = $obj->getRegistro();
        
        $datos = [
            'obj'=>$data['data'][0],
            
        ];
        $this->mostrar('PCs/formulario.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombrePC=$_POST['nombrePC'];
        $usuarioPC=$_POST['usuarioPC'];
        $clavePC=$_POST['clavePC'];
        $detallesTipoProcesador=$_POST['detallesTipoProcesador'];
        $detallesSO=$_POST['detallesSO'];
        $detallesFactorForma=$_POST['detallesFactorForma'];
        $observaciones=$_POST['observaciones'];
        $direccionesIP=$_POST['direccionesIP'];
        $mascaraRed=$_POST['mascaraRed'];
        $PuertaEnlace=$_POST['PuertaEnlace'];
        $DNS1=$_POST['DNS1'];
        $DNS2=$_POST['DNS2'];
        $numeroSerie=$_POST['numeroSerie'];
        $foto=$_POST['foto'];


        $esNuevo=$_POST['esNuevo'];

        $obj = new PCs(
        $id,
        $nombrePC,
        $usuarioPC,
        $clavePC,
        $detallesTipoProcesador,
        $detallesSO,
        $detallesFactorForma,
        $observaciones,
        $direccionesIP,
        $mascaraRed,
        $PuertaEnlace,
        $DNS1,
        $DNS2,
        $numeroSerie,
        $foto);

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
        $obj = new PCs($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}

?>

<?php
