<?php
require_once './core/Modelo.php';
class Area extends Modelo {
    private $id;
    private $nombre;
    private $idOficina;
    private $_tabla='areas';

    private $_vista='v_areas';

    private $columna;
    private $valor;

    public function __construct($id=null,$nombre=null,$idOficina=null, $columna=null, $valor=null){
        $this->id = $id;
        $this->nombre=$nombre;
        $this->idOficina=$idOficina;
        $this->columna=$columna;
        $this->valor=$valor;
        parent::__construct($this->_tabla);
    }

    public function mostrar(){

        $this->setTabla($this->_vista);

        return $this->getAll();
    }

    public function getRegistro(){
        return $this->getById($this->id);
    }
    public function guardar(){
        $data=[
            'nombre'=>"'$this->nombre'",
            'idOficina'=>"'$this->idOficina'"
        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'nombre'=>"'$this->nombre'",
            'idOficina'=>"'$this->idOficina'"
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }

    public function filtrado(){
        
        $valor =$_POST['idOficina'];
        
        $columna ='idOficina';

        $this->setTabla($this->_vista);
        return $this->getBy($columna, $valor);
    }
}