<?php
require_once './core/Modelo.php';
class PCs extends Modelo {
    private $id;
    private $nombrePC;
    private $usuarioPC;
    private $clavePC;
    private $idTipoProcesador;
    private $detallesTipoProcesador;
    private $idSO;
    private $detallesSO;
    private $idEstado;
    private $idFactorForma;
    private $detallesFactorForma;
    private $observaciones;
    private $direccionIP;
    private $mascaraRed;
    private $PuertaEnlace;
    private $DNS1;
    private $DNS2;      
    private $numeroSerie;
    private $foto;
    private $motivo;
    private $idMantenimiento;

    private $_tabla='PCs';
    private $_vista='v_pcs';
    private $_vistaUso='v_pcs_en_uso';
    private $_vistaAlmcn='v_pcs_almacen';
    public function __construct(
        $id=null,
        $nombrePC=null,
        $usuarioPC=null, 
        $clavePC=null,
        $idTipoProcesador=null,
        $detallesTipoProcesador=null,
        $idSO=null,
        $detallesSO=null, 
        $idEstado=null,
        $idFactorForma=null,
        $detallesFactorForma=null,
        $observaciones=null,
        $direccionIP=null,
        $mascaraRed=null,
        $PuertaEnlace=null,
        $DNS1=null,
        $DNS2=null,
        $numeroSerie=null,
        $foto=null,
        $motivo=null,
        $idMantenimiento=null
        ){
        $this->id = $id;
        $this->idTipoProcesador=$idTipoProcesador;
        $this->detallesSO=$detallesSO;
        $this->idSO=$idSO;
        $this->detallesTipoProcesador=$detallesTipoProcesador;
        $this->idEstado=$idEstado;
        $this->idFactorForma=$idFactorForma;
        $this->detallesFactorForma=$detallesFactorForma;
        $this->observaciones=$observaciones;
        $this->direccionIP=$direccionIP;
        $this->mascaraRed=$mascaraRed;
        $this->PuertaEnlace=$PuertaEnlace;
        $this->DNS1=$DNS1;
        $this->DNS2=$DNS2;
        $this->numeroSerie=$numeroSerie;
        $this->nombrePC=$nombrePC;
        $this->usuarioPC=$usuarioPC;
        $this->clavePC=$clavePC;
        $this->foto=$foto;
        $this->motivo=$motivo;
        $this->idMantenimiento=$idMantenimiento;
      
        parent::__construct($this->_tabla);
    }

    public function mostrarUso(){
        $this->setTabla($this->_vista);
        return $this->getAll();
    }
    public function mostrarAlmcn(){
        $this->setTabla($this->_vistaAlmcn);
        return $this->getAll();
    }
    public function mostrar(){
        $this->setTabla($this->_vista);
        return $this->getAll();
    }
    public function getRegistro(){

        return $this->getById($this->id);
    }

    public function getDetalles(){
        $this->setTabla($this->_vista);
        return $this->getById($this->id);
    }
    

    public function guardar(){
        $data=[
            'id'=>"'$this->id'",
            'nombrePC'=>"'$this->nombrePC'",
            'usuarioPC'=>"'$this->usuarioPC'",
            'clavePC'=>"'$this->clavePC'",
            'idTipoProcesador'=>"'$this->idTipoProcesador'",
            'detallesTipoProcesador'=>"'$this->detallesTipoProcesador'",
            'idSO'=>"'$this->idSO'",
            'detallesSO'=>"'$this->detallesSO'",
            'idEstado'=>"'$this->idEstado'",
            'idFactorForma'=>"'$this->idFactorForma'",
            'detallesFactorForma'=>"'$this->detallesFactorForma'",
            'observaciones'=>"'$this->observaciones'",
            'direccionIP'=>"'$this->direccionIP'",
            'mascaraRed'=>"'$this->mascaraRed'",
            'PuertaEnlace'=>"'$this->PuertaEnlace'",
            'DNS1'=>"'$this->DNS1'",
            'DNS2'=>"'$this->DNS2'",
            'numeroSerie'=>"'$this->numeroSerie'",
            'foto'=>"'$this->foto'",
            'motivo'=>"'$this->motivo'",
            'idMantenimiento'=>"'$this->idMantenimiento'"
        ];
        return $this->insert($data);
    }
    
    public function actualizar(){
        $data=[
            'id'=>"'$this->id'",
            'nombrePC'=>"'$this->nombrePC'",
            'usuarioPC'=>"'$this->usuarioPC'",
            'clavePC'=>"'$this->clavePC'",
            'idTipoProcesador'=>"'$this->idTipoProcesador'",
            'detallesTipoProcesador'=>"'$this->detallesTipoProcesador'",
            'idSO'=>"'$this->idSO'",
            'detallesSO'=>"'$this->detallesSO'",
            'idEstado'=>"'$this->idEstado'",
            'idFactorForma'=>"'$this->idFactorForma'",
            'detallesFactorForma'=>"'$this->detallesFactorForma'",
            'observaciones'=>"'$this->observaciones'",
            'direccionIP'=>"'$this->direccionIP'",
            'mascaraRed'=>"'$this->mascaraRed'",
            'PuertaEnlace'=>"'$this->PuertaEnlace'",
            'DNS1'=>"'$this->DNS1'",
            'DNS2'=>"'$this->DNS2'",
            'numeroSerie'=>"'$this->numeroSerie'",
            'foto'=>"'$this->foto'",
            'motivo'=>"'$this->motivo'",
            'idMantenimiento'=>"'$this->idMantenimiento'"
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }

    public function filPatrim(){
        $valor = $_POST['patrim'];
        $columna = 'codigoPatrimonial';

        $this->setTabla($this->_vista);
        return $this->getBy($columna, $valor);
    }

    public function filSO(){
        $valor = $_POST['prmtrSO'];
        $columna = 'Nombre_Operativos';

        $this->setTabla($this->_vista);
        return $this->getBy($columna, $valor);
    }

    public function filEstado(){
        $valor = $_POST['prmtrEstado'];
        $columna = 'Estado_Equipo';

        $this->setTabla($this->_vista);
        return $this->getBy($columna, $valor);
    }
}