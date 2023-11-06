<?php
require_once './core/Modelo.php';
class Estados extends Modelo {
    private $id;
    private $nombre;
    private $_tabla='estados';

    public function __construct($id=null,$nombre=null){
        $this->id = $id;
        $this->nombre=$nombre;
   
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
            'nombre'=>"'$this->nombre'",
           
        ];
        return $this->insert($data);
    }
    public function actualizar(){
        $data=[
            'nombre'=>"'$this->nombre'",
           
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
/*require_once './core/Modelo.php';

class Estados extends Modelo {
    private $id;
    private $nombre;

    protected $idSiguiente;

    private $_tabla='estados';
    
    public function __construct($id=null
                    ,$nombre=null
                    ){
        $this->id = $id;
        $this->nombre=$nombre;

        parent::__construct($this->_tabla);
    }
    public function getTodo(){
        return $this->getAll();
    }
    public function eliminar(){
        $this->setTabla('estados');
        return $this->deleteById($this->id);
    }
    public function guardar(){
        $this->setTabla('estados');
        $datos = $this->getDatos();
        # var_dump($datos);
        return $this->insert($datos);
    }
    public function editar(){
        $this->setTabla('estados');
        return $this->getById($this->id);
    }
    public function actualizar(){
        $this->setTabla('estados');
        $datos = $this->getDatos();

        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
    private function getDatos(){
        $sql = "Select * from v_siguienteIdEstados";
        $this->setSql($sql);
        $data = $this->ejecutarSql();
        $siguiente = ($data['data'][0]['siguiente']==null)?1:$data['data'][0]['siguiente'];
        $this->idSiguienteEstado = $siguiente;
        $this->setSql(null);    # Para poder volver a usar nuestra clase SQL
        return [
            'id'=>$this->idSiguienteEstado,
            'nombre'=>"'$this->nombre'"
          
        ];
    }
}*/