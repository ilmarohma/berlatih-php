<?php 
class Animal {
    public $name;
    public $legs = 2 ;
    public $cold_blooded = false;

    public function __construct($name) {
        $this -> name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function get_legs() {
        return $this->legs;
    }

    function get_cold_blooded() {
        if($this->cold_blooded){
            return "true";
        }
        else{
            return "false";
        }
    }

}


?>