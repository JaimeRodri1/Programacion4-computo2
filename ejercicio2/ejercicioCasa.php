<?php

    interface Iidentificacion{
        public function getIdentificarte();
        
    }

    abstract class Persona implements Iidentificacion{
        public $dni;
        public $nombre;
        public $papel; 

        public function hablar(){
            echo "Acción hablar: Hola. <br>";
        }
        //metodos 
        abstract function getDni();
        abstract function getNombre();
        abstract function getPapel();

    };
    class Datos extends Persona{
        public function getDni()
        {
            return $this->dni;
        }
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getPapel()
        {
            return $this->papel;
        }
        public function getIdentificarte()
        {
            echo "Identificarse: Saludos. <br><br>";
        }
    };

    class Propietario extends Persona{
     
        public function getDni()
        {
            return $this->dni;
        }
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getPapel()
        {
            return $this->papel;
        }
        public function getIdentificarte()
        {
            echo "Identificarse: Datos del propietario. <br><br>";
        }

        public $direccion;
        public function getDireccion(){
            return $this->direccion;
        }
        public function propiedad(){
            echo "Acción: Propietario. <br>";
        }
    };

    class Cliente extends Persona{
        public function getDni()
        {
            return $this->dni;
        }
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getPapel()
        {
            return $this->papel;
        }
        public function getIdentificarte()
        {
            echo "Identificarse: Datos del cliente. <br><br>";
        }

        public $telefono;
        public function getTelefono(){
            return $this->telefono;
        }
        public $vehiculo;
        public function getVehiculo(){
            return $this->vehiculo;
        }
        public function compra(){
            echo "Acción: Comprar. <br>";
        }
    };


    //clases abstractas de persona y vehiculo
    abstract class Vehiculo implements Iidentificacion{
        public $matricula;
        public $marca;
        public $modelo;

        public function anio(){
            echo "Año: 2020. <br>";
        }
        //metodos 
        abstract function getMatricula();
        abstract function getMarca();
        abstract function getModelo();

    };
    class Generalidades extends Vehiculo{
        public function getMatricula()
        {
            return $this->matricula;
        }
        public function getMarca()
        {
            return $this->marca;
        }
        public function getModelo()
        {
            return $this->modelo;
        }
        public function getIdentificarte()
        {
            echo "Identificar: Generalidades. <br><br>";
        }
    };

    
    class Coche extends Vehiculo{
        //definimos metodo
        public function getMatricula()
        {
            return $this->matricula;
        }
        public function getMarca()
        {
            return $this->marca;
        }
        public function getModelo()
        {
            return $this->modelo;
        }
        public function getIdentificarte()
        {
            echo "Identificar: Datos del coche. <br><br>";
        }

        public $anchura;
        public function getAnchura(){
            return $this->anchura;
        }
        public $altura;
        public function getAltura(){
            return $this->altura;
        }
        public function velocidad(){
            echo "Velocidad: Alta. <br>";
        }
    };

    class Moto extends Vehiculo{
        //definimos metodo
        public function getMatricula()
        {
            return $this->matricula;
        }
        public function getMarca()
        {
            return $this->marca;
        }
        public function getModelo()
        {
            return $this->modelo;
        }
        public function getIdentificarte()
        {
            echo "Identificar: Datos de la moto. <br> <br>";
        }

        public $limitador;
        public function getLimitador(){
            return $this->limitador;
        }
        public function tipo(){
            echo "Tipo: Deportivas. <br>";
        }
    };
    

    //instacias
    $datos=new Datos();
    echo "Clase abstracta: Persona. <br>";
    $datos->dni="DNI: 77775555. <br>";
    $datos->nombre="Nombre: Juana. <br>";
    $datos->papel="Papel: Gerente. <br>";
    echo $datos->getDni();
    echo $datos->getNombre();
    echo $datos->getPapel();
    $datos->hablar();
    $datos->getIdentificarte();

    //-------------------------
    $propietario=new Propietario();
    echo "Clase abstracta: Propietario. <br>";
    $propietario->direccion="Dirección: Colonia Jardines de la Ceiba. <br>";
    echo $propietario->getDireccion();
    $propietario->propiedad();
    $propietario->getIdentificarte();

    //-------------------------
    $cliente=new Cliente();
    echo "Clase abstracta: Cliente. <br>";
    $cliente->telefono="Telefono: 60020601. <br>";
    $cliente->vehiculo="Vehiculo: <br> 1- Nissan <br> 2- Hunday. <br>";
    echo $cliente->getTelefono();
    echo $cliente->getVehiculo();
    $cliente->compra();
    $cliente->getIdentificarte();

    //------------------------
    $generalidades=new Generalidades();
    echo "Clase abstracta: Vehiculo. <br>";
    $generalidades->matricula="Matricula: 25525-D. <br>";
    $generalidades->marca="Marca: Toyota. <br>";
    $generalidades->modelo="Modelo: Corolla. <br>";
    echo $generalidades->getMatricula();
    echo $generalidades->getMarca();
    echo $generalidades->getModelo();
    $generalidades->anio();
    $generalidades->getIdentificarte();

    //------------------------
    $coche=new Coche();
    echo "Clase abstracta: Coche. <br>";
    $coche->anchura="Anchura: 1840, 1871. <br>";
    $coche->altura="Altura: 160, 136. <br>";
    echo $coche->getAnchura();
    echo $coche->getAltura();
    $coche->velocidad();
    $coche->getIdentificarte();

    //------------------------
    $moto=new Moto();
    echo "Clase abstracta: Moto. <br>";
    $moto->limitador="Limitador: Por su tipo de carnet. <br> ";
    echo $moto->getLimitador();
    $moto->tipo();
    $moto->getIdentificarte();
?>