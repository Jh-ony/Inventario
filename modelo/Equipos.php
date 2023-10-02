<?php
require_once './core/Modelo.php';
class Equipos extends Modelo {
    private $id;
    private $fechaCompra;
    private $codigoPatrimonial;
    private $color;
    private $observaciones;
    private $foto;
    private $valorCompra;
    private $numeroPECOSA;
    private $numeroOC;
    private $dimensiones;

    private $_tabla='equipos';
    public function __construct($id=null,$fechaCompra=null,$codigoPatrimonial=null,$color=null,$observaciones=null,$foto=null,$valorCompra=null,$numeroPECOSA=null,$numeroOC=null,$dimensiones=null,){
        $this->id = $id;
        $this->fechaCompra=$fechaCompra;
        $this->codigoPatrimonial=$codigoPatrimonial;
        $this->color=$color;
        $this->observaciones=$observaciones;
        $this->foto=$foto;
        $this->valorCompra=$valorCompra;
        $this->numeroPECOSA=$numeroPECOSA;
        $this->numeroOC=$numeroOC;
        $this->dimensiones=$dimensiones;
      
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
            'fechaCompra'=>"'$this->fechaCompra'",
            'codigoPatrimonial'=>"'$this->codigoPatrimonial'",
            'color'=>"'$this->color'",
            'observaciones'=>"'$this->observaciones'",
            'foto'=>"'$this->foto'",
            'valorCompra'=>"'$this->valorCompra'",
            'numeroPECOSA'=>"'$this->numeroPECOSA'",
            'numeroOC'=>"'$this->numeroOC'",
            'dimensiones'=>"'$this->dimensiones'",
        ];
        return $this->insert($data);
    }
    
    public function actualizar(){
        $data=[
            'fechaCompra'=>"'$this->fechaCompra'",
            'codigoPatrimonial'=>"'$this->codigoPatrimonial'",
            'color'=>"'$this->color'",
            'observaciones'=>"'$this->observaciones'",
            'foto'=>"'$this->foto'",
            'valorCompra'=>"'$this->valorCompra'",
            'numeroPECOSA'=>"'$this->numeroPECOSA'",
            'numeroOC'=>"'$this->numeroOC'",
            'dimensiones'=>"'$this->dimensiones'",
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
}