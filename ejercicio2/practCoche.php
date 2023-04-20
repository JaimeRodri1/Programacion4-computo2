<?php

    interface IVolante{

        public function girar();
    }

    interface IPito{
        public function pitar();
    };

    class Coche implements IVolante, IPito{
        public function girar(){echo " Girar ";}
        public function pitar(){echo " Pitar ";}

    }

   
    $coche=new Coche();
    $coche->girar();
    $coche->pitar();

?>