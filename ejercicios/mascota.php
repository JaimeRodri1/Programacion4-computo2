<?php
    #clase mascota-asignar propiedades-usar clase
    class Mascota{
        private $nombreMascota;
        private $raza;
        private $peso;
        private $edad;

         //metodo constructor
        public function __construct($nombreMascota, $raza, $peso, $edad){
            $this->nombreMascota = $nombreMascota;
            $this->raza=$raza;
            $this->peso=$peso;
            $this->edad=$edad;
        }

        //metodos de propiedad        
        public function getNombreMascota(){return $this->nombreMascota;}
        public function setnombreMascota($nombreMascota){$this->nombreMascota;}

        public function getRaza(){return $this->raza;}
        public function setRaza($raza){$this->raza;}

        public function getPeso(){return $this->peso;}
        public function setPeso($peso){$this->peso;}

        public function geEdad(){return $this->edad;}
        public function setEdad($edad){$this->edad;}

        public function datosMascota(){
            $datosMascota="
            <h2>Clase mascota</h2>  
            <TABLE BORDER>
                <tr><td>Nombre de la mascota: <br/></td><td>$this->nombreMascota </td>
                </tr>
                <tr><td>Raza: <br/></td><td>$this->raza </td>
                </tr>
                <tr><td>Peso:<br/></td><td>$this->peso <br/></td>
                </tr>
                <tr><td>Edad:<br/></td><td>$this->edad<br/>  </td>
                </tr>
            </TABLE>
            ";
            return $datosMascota;
    }

}
        //uso de la clase mascota$mascota
        $mascota = new Mascota("Gatito", "Asiático", "8 libras", "2 años"); //instancia de la clase
        echo $mascota-> datosMascota();
?>