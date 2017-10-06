<?php
           
class User{
    
    private $dni;
    private $name;
    
    function __construct($name,$dni){
        $this->dni = $dni;
        $this->name = $name;
    }

    function setName($name){
        $this->name = $name;
    }

    function setDNI($dni){
        $this->dni = $dni;
    }
}


?>