<?php
require_once './core/Modelo.php';

class PCs extends Modelo {
    private $id;
    private $nombrePC;
    private $usuarioPC;
    private $clavePC;
    private $detallesTipoProcesador;
    private $detallesSO;
    private $detallesFactorForma;
    private $observaciones;
    private $direccionesIP;
    private $mascaraRed;
    private $PuertaEnlace;
    private $DNS1;
    private $DNS2;
    private $numeroSerie;
    private $foto;

    private $_tabla='PCs';
    
    public function __construct(
        $id=null,
        $nombrePC=null,
        $usuarioPC=null, 
        $clavePC=null,
        $detallesTipoProcesador=null,
        $detallesSO=null, 
        $detallesFactorForma=null,
        $observaciones=null,
        $direccionesIP=null,
        $mascaraRed=null,
        $PuertaEnlace=null,
        $DNS1=null,
        $DNS2=null,
        $numeroSerie=null,
        $foto=null
        )

        {
        $this->nombrePC = $nombrePC;
        $this->usuarioPC=$usuarioPC;
        $this->clavePC=$clavePC;
        $this->detallesTipoProcesador=$detallesTipoProcesador;
        $this->detallesSO=$detallesSO;
        $this->detallesFactorForma=$detallesFactorForma;
        $this->observaciones=$observaciones;
        $this->direccionesIP=$direccionesIP;
        $this->mascaraRed=$mascaraRed;
        $this->PuertaEnlace = $PuertaEnlace;
        $this->DNS1= $DNS1;
        $this->DNS2= $DNS2;
        $this->numeroSerie= $numeroSerie;
        $this->foto = $foto;

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
            'nombrePC'=>"'$this->nombrePC'",
            'usuarioPC'=>"'$this->usuarioPC'",
            'clavePC'=>"'$this->clavePC'",
            'detallesTipoProcesador'=>"'$this->detallesTipoProcesador'",
            'detallesSO'=>"'$this->detallesSO'",
            'detallesFactorForma'=>"'$this->detallesFactorForma'",
            'observaciones'=>"'$this->observaciones'",
            'direccionesIP'=>"'$this->direccionesIP'",
            'mascaraRed'=>"'$this->mascaraRed'",
            'PuertaEnlace'=>"'$this->PuertaEnlace'",
            'DNS1'=>"'$this->DNS1'",
            'DNS2'=>"'$this->DNS2'",
            'numeroSerie'=>"'$this->numeroSerie'",
            'foto'=>"'$this->foto'"


        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'id'=>"'$this->id'",
            'nombrePC'=>"'$this->nombrePC'",
            'usuarioPC'=>"'$this->usuarioPC'",
            'clavePC'=>"'$this->clavePC'",
            'detallesTipoProcesador'=>"'$this->detallesTipoProcesador'",
            'detalleSO'=>"'$this->detalleSO'",
            'detallesFactorForma'=>"'$this->detallesFactorForma'",
            'observaciones'=>"'$this->observaciones'",
            'direccionesIP'=>"'$this->direccionesIP'",
            'mascaraRed'=>"'$this->mascaraRed'",
            'PuertaEnlace'=>"'$this->PuertaEnlace'",
            'DNS1'=>"'$this->DNS1'",
            'DNS2'=>"'$this->DNS2'",
            'numeroSerie'=>"'$this->numeroSerie'",
            'foto'=>"'$this->foto'"
            
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
}

?>
