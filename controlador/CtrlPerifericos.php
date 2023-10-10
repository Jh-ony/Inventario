<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Perifericos.php';
require_once './modelo/Estados.php';
require_once './modelo/Equipos.php';

class CtrlPerifericos extends Controlador {
    public function index(){
        # echo "Hola Perifericos";
        $obj = new Perifericos;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Perifericos',
            'datos'=>$data['data']
        ];
    $this->mostrar('Perifericos/mostrar.php',$datos);

    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Perifericos ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $obj = new Equipos;
        $obj2 = new Estados;
        $data = $obj->mostrar();
        $data2= $obj2->mostrar();
        $datos= [
            'titulo'=>'Nuevo Periferico',
            'equipo'=>$data['data'],
            'estado'=>$data2['data'],
            
        ];

        /*$obj = new Estados;
        $estado = $obj->mostrar();
        $datos= [
            'titulo'=>'Nuevo Periferico',
            'estado'=>$estado['data'],
            
        ];*/
    $this->mostrar('Perifericos/formulario.php',$datos);
        
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        //$obj = new Estados;
        //$estados = $obj->mostrar();

        $obj = new Perifericos($id);
        $datos = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0],
            'estados'=>$estados['data']
        ];
        
    $this->mostrar('Perifericos/formulario.php',$datos);
        
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $idEstado = $_POST['idEstado'];
        $observaciones = $_POST['observaciones'];
        $foto = $_POST['foto'];
        $descripcion = $_POST['descripcion'];
        $esNuevo = $_POST['esNuevo'];



        $obj = new Perifericos ($id, $idEstado,
                        $nombre, $descripcion
                            , $foto, $observaciones, $esNuevo

                        );

        switch ($esNuevo) {
            case 0: # Editar
                $respuesta=$obj->actualizar();
                break;
            
            default: # Nuevo
                $respuesta=$obj->guardar();
                break;
        }

        
        # var_dump($data);exit;
        $this->index();

    }
} 


/*require_once './core/Controlador.php';
require_once './modelo/Perifericos.php';
require_once './modelo/Estados.php';

class CtrlPerifericos extends Controlador {
    public function index(){
        $obj = new Perifericos();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Perifericos',
            'data'=>$data['data']
        ];
        $this->mostrar('Perifericos/mostrar.php',$datos);
    }
    public function nuevo(){
        # echo "Agregando..";
        $obj = new Estados;
        $estado = $obj->mostrar();
        $datos= [
            'titulo'=>'Nuevo Periferico',
            'estado'=>$estado['data'],
            
        ];
    $this->mostrar('Perifericos/formulario.php',$datos);
        
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Estados;
        $estados = $obj->mostrar();

        $obj = new Perifericos($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0],
            'estados'=>$estados['data']
        ];
        
    $this->mostrar('Perifericos/formulario.php',$datos);
        
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $idEstado = $_POST['idEstado'];
        $observaciones = $_POST['observaciones'];
        $foto = $_POST['foto'];
        $descripcion = $_POST['descripcion'];
        $esNuevo = $_POST['esNuevo'];



        $obj = new Perifericos ($id, $idEstado,
                        $nombre, $descripcion
                            , $foto, $observaciones

                        );

        switch ($esNuevo) {
            case 0: # Editar
                $respuesta=$obj->actualizar();
                break;
            
            default: # Nuevo
                $respuesta=$obj->guardar();
                break;
        }

        
        # var_dump($data);exit;
        $this->index();

    }
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Perifericos ($id);
        $obj->eliminar();

        $this->index();
    }
}
*/
?>



