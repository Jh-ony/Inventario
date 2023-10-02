<?php
require_once './core/Modelo.php';
class DetallesAsignacion extends Modelo {
    private $id;
    private $observaciones;
    private $_tabla='detalles_asignacion';
    public function __construct($id=null,$observaciones=null){
        $this->id = $id;
        $this->observaciones=$observaciones;
   
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
            'observaciones'=>"'$this->observaciones'",
           
        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'observaciones'=>"'$this->observaciones'",
           
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
}