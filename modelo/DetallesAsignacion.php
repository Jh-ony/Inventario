<?php
require_once './core/Modelo.php';
class DetallesAsignacion extends Modelo {
    private $id;
    private $idAsignacion;
    private $idEquipo;
    private $observaciones;
    private $cantidad;

    private $_tabla='detalles_asignacion';
    public function __construct($id=null,$idAsignacion=null,$idEquipo=null,$observaciones=null,$cantidad=null){
        $this->id = $id;
        $this->idAsignacion=$idAsignacion;
        $this->idEquipo=$idEquipo;
        $this->observaciones=$observaciones;
        $this->cantidad=$cantidad;
   
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
            'id'=>"'$this->id'",
            'idAsignacion'=>"'$this->idAsignacion'",
            'idEquipo'=>"'$this->idEquipo'",
            'observaciones'=>"'$this->observaciones'",
            'cantidad'=>"'$this->cantidad'"
           
        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'id'=>"'$this->id'",
            'idAsignacion'=>"'$this->idAsignacion'",
            'idEquipo'=>"'$this->idEquipo'",
            'observaciones'=>"'$this->observaciones'",
            'cantidad'=>"'$this->cantidad'"
           
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
}