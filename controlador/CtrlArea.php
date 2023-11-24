<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Area.php';
require_once './modelo/Oficina.php';

class CtrlArea extends Controlador {
    public function index(){
        $obj = new Area();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Areas',
            'data'=>$data['data']
        ];
        $home = $this->mostrar('areas/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }

// Mostrar Oficina

public function mostrarOficina(){
    $obj = new Oficina();
    $data = $obj->mostrar();
    # var_dump($data);exit;
    $datos = [
        'titulo'=>'Oficinas',
        'data'=>$data['data']
    ];
    $home=$this->mostrar('oficinas/mostrar.php',$datos,true);
    $datos = [
        'contenido'=>$home
    ];
    $this->mostrar('plantilla/home.php',$datos);

}


    public function nuevo(){
        $objOficina = new Oficina;
        $data = $objOficina->mostrar();
        $datos = [
            'oficinas'=>$data['data']
        ];  

        $home = $this->mostrar('areas/formulario.php',$datos, true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos );
    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new Area($id);
        $data = $obj->getRegistro();
        // var_dump($data);exit;
        $objOficina = new Oficina;
        $dataOficina = $objOficina->mostrar();
        
        
        $datos = [
            'obj'=>$data['data'][0],
            'oficinas'=>$dataOficina['data']
        ];
        $home = $this->mostrar('areas/formulario.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }
    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $idOficina=$_POST['idOficina'];

        $esNuevo=$_POST['esNuevo'];

        $obj = new Area($id,$nombre,$idOficina);

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
        $obj = new Area($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }

    public function index2(){
        $obj = new Area();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'Areas',
            'data'=>$data['data']
        ];
        $home = $this->mostrar('areas/mostrar.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
    }

    public function metFiltro(){
        $objOficina = new Oficina;
        $dataOficina = $objOficina->mostrar();
        
        
        $datos = [
            
            'oficinas'=>$dataOficina['data']
        ];
        $home = $this->mostrar('areas/filtro.php',$datos,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);
        
    }

    public function filtrar(){
        $valor=$_POST['idOficina'];
        $columna = 'idOficina';
        $obj = new Area();
        
        $resultado= $obj->filtrado($columna, $valor);
        # var_dump($data);exit;


        $home = $this->mostrar('areas/mostrar.php',$resultado,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

  
        
    }

}