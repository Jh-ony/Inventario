<?php
require_once './core/Modelo.php';
class Mantenimiento extends Modelo{



    private $id;
    private $caso;

    private $_tabla='mantenimiento';

    public function __construct($id=null,$caso=null){
        $this->id = $id;
        $this->caso=$caso;
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
                'caso'=>"'$this->caso'"
            ];
            return $this->insert($data);
        }
        public function actualizar(){
            $data=[
                'caso'=>"'$this->caso'"
            ];
            $wh = 'id='.$this->id;
            return $this->update($wh, $data);
        }
        public function eliminar(){
            return $this->deleteById($this->id);
        }
    }

