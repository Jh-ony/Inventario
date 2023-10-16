<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Modelos.php';
require_once './modelo/Marcas.php';


class CtrlModelos extends Controlador {
    public function index(){
        $obj = new Modelos();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Modelos',
            'data'=>$data['data']
        ];
        $home = $this->mostrar('Modelos/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function nuevo(){
        $objMarcas= new Marcas();
        $dataMarcas = $objMarcas ->mostrar();
        $datos =[
            'marcas'=>$dataMarcas['data']
        ];


        $home = $this->mostrar('Modelos/formulario.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Modelos($id);
        $data = $obj->getRegistro();
        $objMarcas= new Marcas();
        $dataMarcas = $objMarcas ->mostrar();
        $datos = [
            'obj'=>$data['data'][0],
            'marcas'=>$dataMarcas['data']
            
        ];
        $home = $this->mostrar('Modelos/formulario.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $detalles=$_POST['detalles'];
        $idMarcas=$_POST['idMarcas'];
    

        $esNuevo=$_POST['esNuevo'];

        $obj = new Modelos($id,$nombre,$detalles,$idMarcas);

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
        $obj = new Modelos($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }
}

?>

<?php
/*
require_once './core/Controlador.php';
require_once './modelo/Modelos.php';


class CtrlModelos extends Controlador {
    public function index(){
        # echo "Hola Modelos";
        $obj = new Modelos;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Modelos',
            'datos'=>$data['data']
        ];
    $this->mostrar('Modelos/mostrar.php',$datos);

    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Modelos ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $obj = new ProgramaEstudio;
        $programas = $obj->mostrar();
        $datos= [
            'titulo'=>'Nuevo Modelos',
            'programas'=>$programas['data'],
            
        ];
    $this->mostrar('Modelos/formulario.php',$datos);
        
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new ProgramaEstudio;
        $programas = $obj->mostrar();

        $obj = new Modelos($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0],
            'programas'=>$programas['data']
        ];
        
    $this->mostrar('Modeloss/formulario.php',$datos);
        
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $dni = $_POST['dni'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $telefono = $_POST['telefono'];
        $idPrograma = $_POST['idPrograma'];
        $genero = $_POST['genero'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Modelos ($id, $idPrograma, 
                        $nombres, $apellidos
                            , $dni, $fechaNacimiento
                            , $genero, $direccion
                            ,$telefono, $correo
                        );

        switch ($esNuevo) {
            case 0: # Editar
                $data=$obj->actualizar();
                break;
            
            default: # Nuevo
                $data=$obj->guardar();
                break;
        }

        
        # var_dump($data);exit;
        $this->index();

    }
}
*/