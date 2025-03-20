<?php
interface Model{
    function get($prop);
    function set($prop, $value);
}


abstract class Persona implements Model
{
    protected $nombre = null;
    private $apellido = null;
    private $email = null;
    private $edad = null;
    private $mensaje = null;

    function nombreCompleto(){
        return $this->nombre . ' ' . $this->apellido;
    }
    function get($prop){
        return $this->{$prop};
    }

    function set($prop, $value){
        $this->{$prop} = $value;
    }

    abstract function toString();

    function AnalisisEdad($edad){
        if($edad>=18){
            $mensaje="Usted es mayor de edad";
        }else{
            $mensaje="Usted es menor de edad";
        }
        return $mensaje;
    }
}

class Estudiante extends Persona{
    function toString(){
        //$nombre= $this->nombre;
        //$apellido=$this->get('apellido');
        //$nombreCompleto= $this->nombreCompleto();
        $nombre=$this->get('nombre'); 
        $apellido=$this->get('apellido'); 
        $email=$this->get('email'); 
        $edad=$this->get('edad');
        $mensaje=$this->AnalisisEdad($edad);
        return "$nombre $apellido $email $edad $mensaje";
        //return "$nombreCompleto $email";
        
    }
       
}



class Docente extends Persona{

    function __construct($nombre,$apellido){
        $this->set('nombre',$nombre);
        $this->set('apellido',$apellido);
        $this->set('email',"sin definir");
    }
    function toString(){
        $nombre= $this->nombre;
        $apellido=$this->get('apellido');
        $nombreCompleto= $this->nombreCompleto();
        $email=$this->get('email'); 
        return "$nombreCompleto $email";
    }
}

// $estudiante=new Estudiante();
// $estudiante->set('nombre','Sergio');
// $estudiante->set('apellido','Ramos');
// $estudiante->set('email','serramos@uniboyaca.edu.co');
// //
// echo $estudiante->toString() . '<br>';

// $docente = new Docente("Lina", "Chaparro");
// echo $docente->toString() . '<br>';
// $docente->set('email','lpchaparroa@uniboyaca.edu.co');
// echo $docente->toString() . '<br>';