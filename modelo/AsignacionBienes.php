<?php
require_once './core/Modelo.php';
require_once 'Estados.php';
class AsignacionBienes extends Modelo {
    private $id;
    private $fecha;
    private $_tabla='asignaciones_bienes';
    public function __construct($id=null,$fecha=null){
        $this->id = $id;
        $this->fecha=$fecha;
   
        parent::__construct($this->_tabla);
    }

    public function mostrar(){
        return $this->getAll();
    }
    public function getRegistro(){
        return $this->getById($this->id);
    }
    public function guardar(){
        $data=[
            'fecha'=>"'$this->fecha'",
           
        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'fecha'=>"'$this->fecha'",
           
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
}