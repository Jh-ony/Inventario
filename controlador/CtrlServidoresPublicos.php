<?php

require_once './core/Controlador.php';
require_once './modelo/ServidoresPublicos.php';
require_once './modelo/Cargo.php';
require_once './modelo/Area.php';
require_once './modelo/Oficina.php';


class CtrlServidoresPublicos extends Controlador {
    public function index(){
        $obj = new ServidoresPublicos();
        $data = $obj->mostrar();
        # var_dump($data);exit;
        $datos = [
            'titulo'=>'ServidoresPublicos',
            'data'=>$data['data']
        ];

        $this->mostrar('ServidoresPublicos/mostrar.php',$datos);
    }
    public function nuevo(){
        $obj = new Cargo;
        $obj2 = new Area;
        $obj3 = new Oficina;
        $data = $obj->mostrar();
        $data2 = $obj2->mostrar();
        $data3 = $obj3->mostrar();
        $datos= [
            'cargo'=>$data['data'],
            'area'=>$data2['data'],
            'oficina'=>$data3['data']
            
        ];

       /* $obj = new Area;
        $data = $obj->mostrar();
        $datosArea= [
            'Area'=>$data['data']
        ];

        $obj = new Oficina;
        $data = $obj->mostrar();
        $datosOficina= [
            'Oficina'=>$data['data']
        ];*/
        $this->mostrar('ServidoresPublicos/formulario.php', $datos);

    }
    public function editar(){
        $id = $_GET['id'];
        $obj = new ServidoresPublicos($id);
        $data = $obj->getRegistro();

        $obj = new Cargo;
        $dataCargo = $obj->mostrar();
        
        
        $datos = [
            'obj'=>$data['data'][0],
            'Cargo'=>$dataCargo['data']
        ];
        $this->mostrar('ServidoresPublicos/formulario.php',$datos);
    }
    
   /*public function nuevo_1(){
        $obj = new Area;
        $data = $obj->mostrar();
        $datos = [
            'Area'=>$data['data']
        ];

        $this->mostrar('ServidoresPublicos/formulario.php',$datos);
    }
    
    public function editar_1(){
        $id = $_GET['id'];
        $obj = new ServidoresPublicos($id);
        $data = $obj->getRegistro();

        $obj = new Area;
        $dataArea = $obj->mostrar();
        
        
        $datos = [
            'obj'=>$data['data'][0],
            'Area'=>$dataArea['data']
        ];
        $this->mostrar('ServidoresPublicos/formulario.php',$datos);
    }
    
    public function nuevo_2(){
        $obj = new Oficina;
        $data = $obj->mostrar();
        $datos = [
            'oficinas'=>$data['data']
        ];

        $this->mostrar('ServidoresPublicos/formulario.php',$datos);
    }
    public function editar_2(){
        $id = $_GET['id'];
        $obj = new ServidoresPublicos($id);
        $data = $obj->getRegistro();

        $obj = new Oficina;
        $dataOficina = $obj->mostrar();
        
        
        $datos = [
            'obj'=>$data['data'][0],
            'oficinas'=>$dataOficina['data']
        ];
        $this->mostrar('ServidoresPublicos/formulario.php',$datos);
    }*/
    public function guardar(){
        $id=$_POST['id'];
        $idCargo=$_POST['idCargo'];
        $idArea=$_POST['idArea'];
        $idOficina=$_POST['idOficina'];
        $fecha_inicio=$_POST['fecha_inicio'];
        $fecha_fin=$_POST['fecha_fin'];

        $esNuevo=$_POST['esNuevo'];

        $obj = new ServidoresPublicos($id,$idCargo,$idArea,$idOficina,$fecha_inicio,$fecha_fin);

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
        $obj = new ServidoresPublicos($id);
        $respuesta = $obj->eliminar();
        $this->index();

    }}