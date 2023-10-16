<?php
require_once './core/Modelo.php';
//require_once 'ServidoresPublicos.php';
class Desplazamientos extends Modelo {
    private $id;
    private $fecha;
    private $idServidorOrigen;
    private $idServidorDestino;
    private $_tabla='desplazamientos';
    public function __construct($id=null,$fecha=null,$idServidorOrigen=null,$idServidorDestino=null){
        $this->id = $id;
        $this->fecha=$fecha;
        $this->idServidorOrigen=$idServidorOrigen;
        $this->idServidorDestino=$idServidorDestino;
   
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
            'idServidorOrigen'=>"'$this->idServidorOrigen'",
            'idServidorDestino'=>"'$this->idServidorDestino'"
           
        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'fecha'=>"'$this->fecha'",
            'idServidorOrigen'=>"'$this->idServidorOrigen'",
            'idServidorDestino'=>"'$this->idServidorDestino'"
           
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
}