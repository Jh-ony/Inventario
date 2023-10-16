<?php
require_once './core/Modelo.php';

class Persona extends Modelo {
    private $id;
    private $nombres;
    private $apellidos;
    private $DNI;
    private $correo;
    private $fechaNacimiento;
    private $genero;
    private $usuario;
    private $password;
    private $direccion;
    private $telefono;
    protected $idSiguiente;

    private $_tabla='personas';
    
    public function __construct($id=null
                    ,$nombres=null, $apellidos=null
                    ,$DNI=null,$fechaNacimiento=null
                    , $genero=null,$direccion=null,$telefono=null,
                     $correo=null
                    ){
        $this->id = $id;
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->DNI=$DNI;
        $this->fechaNacimiento=$fechaNacimiento;
        $this->genero=$genero;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->correo=$correo;

        parent::__construct($this->_tabla);
    }
    public function mostrar(){
        return $this->getAll();
    }
    
    public function getTodo(){
        return $this->getAll();
    }
    public function eliminar(){
        $this->setTabla('personas');
        return $this->deleteById($this->id);
    }
    public function guardar(){
        $this->setTabla('personas');
        $datos = $this->getDatos();
        # var_dump($datos);
        return $this->insert($datos);
    }
    public function editar(){
        $this->setTabla('personas');
        return $this->getById($this->id);
    }
    public function actualizar(){
        $this->setTabla('personas');
        $datos = $this->getDatos();

        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
    private function getDatos(){
        $sql = "Select * from v_siguienteIdPersona";
        $this->setSql($sql);
        $data = $this->ejecutarSql();
        $siguiente = ($data['data'][0]['siguiente']==null)?1:$data['data'][0]['siguiente'];
        $this->idSiguiente = $siguiente;
        $this->setSql(null);    # Para poder volver a usar nuestra clase SQL
        return [
            'id'=>$this->idSiguiente,
            'nombres'=>"'$this->nombres'",
            'apellidos'=>"'$this->apellidos'",
            'dni'=>"'$this->DNI'",
            'correo'=>"'$this->correo'",
            'fecha_nacimiento'=>"'$this->fechaNacimiento'",
            'genero'=>"$this->genero",
            'direccion'=>"'$this->direccion'",
            'telefono'=>"'$this->telefono'",
        ];
    }
}