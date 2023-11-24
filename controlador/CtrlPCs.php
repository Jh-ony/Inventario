<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/PCs.php';
require_once './modelo/Estados.php';
require_once './modelo/FactorForma.php';
require_once './modelo/SistemasOperativos.php';
require_once './modelo/TiposProcesadores.php';
require_once './modelo/Equipos.php';

class CtrlPCs extends Controlador {
    public function index(){
        $obj = new PCs();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'PCs',
            'data'=>$data['data']
        ];
        $home=$this->mostrar('PCs/opcion.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }

    public function pcUso(){
        $obj = new PCs();
        $data = $obj->mostrarUso();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'PCs',
            'data'=>$data['data']
        ];
        $home=$this->mostrar('PCs/mostrar.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }

    public function pcAlmcn(){
        $obj = new PCs();
        $data = $obj->mostrarAlmcn();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'PCs',
            'data'=>$data['data']
        ];
        $home=$this->mostrar('PCs/mostrar.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }


    public function nuevo(){
        $objTiProcesadores = new TiposProcesadores;
        $dataTiProcesadores = $objTiProcesadores->mostrar();

        $objFacForma = new FactorForma;
        $dataFacForma = $objFacForma->mostrar();

        $objSO = new SistemasOperativos;
        $dataSO = $objSO->mostrar();

        $objEstados = new Estados;
        $dataEstados = $objEstados->mostrar();

        $datos = [
            'tiposProcesadores'=>$dataTiProcesadores['data'],
            'factorForma'=>$dataFacForma['data'],
            'SO'=>$dataSO['data'],
            'estados'=>$dataEstados['data']
        ]; 

        $home=$this->mostrar('PCs/formulario.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }

    
    public function editar(){
        $id = $_GET['id'];
        $obj = new PCs ($id);
        $data = $obj->getRegistro();


        $objTiProcesadores = new TiposProcesadores;
        $dataTiProcesadores = $objTiProcesadores->mostrar();

        $objFacForma = new FactorForma;
        $dataFacForma = $objFacForma->mostrar();

        $objSO = new SistemasOperativos;
        $dataSO = $objSO->mostrar();

        $objEstados = new Estados;
        $dataEstados = $objEstados->mostrar();
        
        $datos = [
            'obj'=>$data['data'][0],
            'tiposProcesadores'=>$dataTiProcesadores['data'],
            'factorForma'=>$dataFacForma['data'],
            'SO'=>$dataSO['data'],
            'estados'=>$dataEstados['data']
            
        ];
        $home=$this->mostrar('PCs/formulario.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function guardar(){
        $id=$_POST['id'];
        $nombrePC=$_POST['nombrePC'];
        $usuarioPC=$_POST['usuarioPC'];
        $clavePC=$_POST['clavePC'];
        $idTipoProcesador=$_POST['idTipoProcesador'];
        $detallesTipoProcesador=$_POST['detallesTipoProcesador'];
        $idSO=$_POST['idSO'];
        $detallesSO=$_POST['detallesSO'];
        $idEstado=$_POST['idEstado'];
        $idFactorForma=$_POST['idFactorForma'];
        $detallesFactorForma=$_POST['detallesFactorForma'];
        $observaciones=$_POST['observaciones'];
        $direccionIP=$_POST['direccionIP'];
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
        $idTipoProcesador,
        $detallesTipoProcesador,
        $idSO,
        $detallesSO,
        $idEstado,
        $idFactorForma,
        $detallesFactorForma,
        $observaciones,
        $direccionIP,
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

    public function moverAlmcn(){
        $id = $_GET['id'];
        $obj = new PCs($id);
        $respuesta = $obj->moverAlmcn();
        $this->index();
    }

    pubLic function detalles(){
        $id = $_GET['id'];
        $obj = new PCs($id);
        // $data = $obj->getRegistro();
        // $home=$this->mostrar('PCs/detallesPC.php',$datos,true);
        // $datos = [
        //     'contenido'=>$home
        // ];
        // $this->mostrar('plantilla/home.php',$datos);



        // $obj = new PCs();
        $data = $obj->getDetalles();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'PCs',
            'data'=>$data['data']
        ];
        $home=$this->mostrar('PCs/detallesPC.php',$datos,true);
        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
}

?>

<?php
