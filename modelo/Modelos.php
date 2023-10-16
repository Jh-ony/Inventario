<?php

require_once './core/Modelo.php';
require_once 'Marcas.php';
class Modelos extends Modelo {
    private $id;
    private $nombre;
    private $detalles;
    private $idMarcas;
    private $_tabla='modelos';
    private $_vista='v_modelos';
    public function __construct($id=null,$nombre=null,$detalles=null,$idMarcas=null){
        $this->id = $id;
        $this->nombre=$nombre;
        $this->detalles=$detalles;
        $this->idMarcas=$idMarcas;
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
            'detalles'=>"'$this->detalles'",
            'idMarcas'=>"'$this->idMarcas'"
        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'nombre'=>"'$this->nombre'",
            'detalles'=>"'$this->detalles'",
            'idMarcas'=>"'$this->idMarcas'"
        ];
        $wh = 'id='.$this->id;
        return $this->update($wh, $data);
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
}

?>



<?php
/*

# require_once './core/Modelo.php';
require_once 'Marcas.php';

class Modelos extends Marcas {
    private $id;
    private $nombre;
    private $_tabla='modelos';
    private $_vista='v_modelo';

    public function __construct($id=null,$nombre=null
          
            ){
        $this->id = $id;
        $this->nombre=$nombre;

        parent::__construct($id, $nombre);

       #  parent::__construct($this->_tabla);
    }
    public function getTodo(){
        $this->setTabla($this->_vista);
        return $this->getAll();
    }
    public function eliminar(){
        $this->setTabla($this->_tabla);
        $this->deleteById($this->id);
        # var_dump($this->_tabla);exit;
        $this->setTabla('marcas');
        parent::eliminar();
    }
    public function guardar(){
        parent::guardar();
        $datos = [
            'id'=>$this->idSiguienteMarcas,
            'nombre'=>"$this->nombre",
        ];
        $this->setTabla('modelos');
    #echo "Siguiente: ". $this->idSiguiente;
     #   exit;
        return $this->insert($datos);
    }
    public function editar(){
        $this->setTabla($this->_vista);
        return $this->getById($this->id);
    }
    public function actualizar(){
        parent::actualizar();
        $datos = [
            'id'=>$this->id,
            'nombre'=>$this->nombre,
        ];
        $this->setTabla('modelos');
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}

*/
?>
<?php

/*
require_once 'Marcas.php'; // Incluye la clase de Marcas

class Modelos extends Marcas { // Modelos hereda de Marcas
    private $id;
    private $nombre;
    private $detalles;
    private $_tabla = 'modelos';
    private $_vista = 'v_modelo';

    public function __construct($id = null, $nombre = null, $detalles = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->detalles = $detalles;
        parent::__construct($id, $nombre); // Llama al constructor de Marcas
    }

    public function mostrar() {
        return $this->getAll();
    }

    public function getRegistro() {
        return $this->getById($this->id);
    }

    public function guardar() {
        $data = [
            'nombre' => "'$this->nombre'",
            'detalles' => "'$this->detalles'",
        ];
        return $this->insert($data);
    }

    public function actualizar() {
        $data = [
            'nombre' => "'$this->nombre'",
            'detalles' => "'$this->detalles'",
        ];
        $wh = 'id=' . $this->id;
        return $this->update($wh, $data);
    }

    public function eliminar() {
        return $this->deleteById($this->id);
    }
}
*/
?>
