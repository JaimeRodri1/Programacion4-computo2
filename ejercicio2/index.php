<?php
    //clases abstractas
    abstract class Mascota{
        public $nombre;

        public function saludar(){
            echo "Funcion no abstracta";

        }
        //método abstracto
        abstract function getNombre();

        
    }

    //establecer herencia
    class Gato extends Mascota{
        //definir el metodo
        public function getNombre(){
            return $this->nombre;
        }

    };
    $gato = new Gato("Firu", 1);
    $gato->nombre= "Firulay";
    echo $gato->saludar();
    echo $gato->getNombre();




?>