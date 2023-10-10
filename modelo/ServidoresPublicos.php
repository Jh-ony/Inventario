<?php
require_once './core/Modelo.php';
class ServidoresPublicos extends Modelo {
    private $id;
    private $idCargo;
    private $idArea;
    private $idOficina;
    private $fecha_inicio;
    private $fecha_fin;
    private $_tabla='servidores_Publicos';

    private $_vista='v_servidoresPublicos';

    public function __construct($id=null,$idCargo=null,$idArea=null,
    $idOficina=null,$fecha_inicio=null,$fecha_fin=null){
        $this->id = $id;
        $this->idCargo=$idCargo;
        $this->idArea=$idArea;
        $this->idOficina = $idOficina;
        $this->fecha_inicio=$fecha_inicio;
        $this->fecha_fin=$fecha_fin;
        parent::__construct($this->_tabla);
    }

    public function mostrar(){

        $this->setTabla($this->_tabla);

        return $this->getAll();
    }
    public function getRegistro(){
        return $this->getById($this->id);
    }
    public function guardar(){
        $data=[
            'idCargo'=>"'$this->idCargo'",
            'idArea'=>"'$this->idArea'",
            'idOficina'=>"'$this->idOficina'",
            'fecha_inicio'=>"'$this->fecha_inicio'",
            'fecha_fin'=>"'$this->fecha_fin'"
        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'idCargo'=>"'$this->idCargo'",
            'idArea'=>"'$this->idArea'",
            'idOficina'=>"'$this->idOficina'",
            'fecha_inicio'=>"'$this->fecha_inicio'",
            'fecha_fin'=>"'$this->fecha_fin'",
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
}