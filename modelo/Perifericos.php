<?php
require_once './core/Modelo.php';
require_once 'Estados.php';

class Perifericos extends Estados {
    private $_id;
    private $_idEstado;
    private $_nombre;
    private $_descripcion;
    private $_foto;
    private $_observaciones;
    private $_tabla='perifericos';
    private $_vista='v_perifericos';

    public function __construct($id=null,$idEstado=null,$nombre=null
            ,$descripcion=null, $foto=null
            ,$observaciones=null
            
            ){
        $this->_id = $id;
        $this->_idEstado = $idEstado;
        $this->_nombre=$nombre;
        $this->_descripcion = $descripcion;
        $this->_foto = $foto;
        $this->_observaciones = $observaciones;

        #parent::__construct($id, $nombre);

        parent::__construct($this->_tabla);
    }
    public function getTodo(){
        $this->setTabla($this->_tabla);
        return $this->getAll();
    }
    public function eliminar(){
        $this->setTabla($this->_tabla);
        $this->deleteById($this->id);
        # var_dump($this->_tabla);exit;
        $this->setTabla('perifericos');
        parent::eliminar();
    }
    public function guardar(){
        #parent::guardar();
        $data = [
            'id'=>"$this->_id",
            'idEstados'=>"$this->_idEstado",
            'nombre'=>"$this->_nombre",
            'descripcion'=>"$this->_descripcion",
            'foto'=>"$this->_foto",
            'observaciones'=>"$this->_observaciones",
        ];
        $this->setTabla('perifericos');
    #echo "Siguiente: ". $this->idSiguiente;
     #   exit;
        return $this->insert($data);
    }
    public function editar(){
        $this->setTabla($this->_vista);
        return $this->getById($this->id);
    }
    public function actualizar(){
        #parent::actualizar();
        $datos = [
            'id'=>"$this->id",
            'idEstados'=>"$this->idEstado",
            'nombre'=>"$this->nombre",
            'descripcion'=>"$this->descripcion",
            'foto'=>"$this->foto",
            'observaciones'=>"$this->observaciones",
        ];
        $this->setTabla('perifericos');
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}