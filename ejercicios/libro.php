<?php
    #clase libro-asignar propiedades-usar clase

    class Libro{
        private $titulo;
        private $autor;
        private $editorial;
        public $numPaginas;

          //metodo constructor
        public function __construct($titulo, $autor, $editorial, $numPaginas){
            $this->titulo = $titulo;
            $this->autor=$autor;
            $this->editorial=$editorial;
            $this->numPaginas=$numPaginas;
        }

        //metodos de propiedad        
        public function getTitulo(){return $this->titulo;}
        public function setTitulo($titulo){$this->titulo;}

        public function getAutor(){return $this->autor;}
        public function setAutor($autor){$this->autor;}

        public function getEditorial(){return $this->editorial;}
        public function setEditorial($editorial){$this->editorial;}

        public function geNumPaginas(){return $this->numPaginas;}
        public function setNumPaginas($numPaginas){$this->numPaginas;}

        public function datos(){
            $datos="
            <h2>Clase libro</h2>  
            <TABLE BORDER>
                <tr><td>Nombre del libro: <br/></td><td>$this->titulo </td>
                </tr>
                <tr><td>Autor: <br/></td><td>$this->autor </td>
                </tr>
                <tr><td>Editorial:<br/></td><td>$this->editorial <br/></td>
                </tr>
                <tr><td>Número de páginas:<br/></td><td>$this->numPaginas<br/>  </td>
                </tr>
            </TABLE>
            ";
            return $datos;
        }

    }
     //uso de la clase libro
        $libro = new Libro("El principito", "Antoine de Saint-Exupéry", "Editorial Berenice", "360 pg"); //instancia de la clase
        echo $libro-> datos();
?>