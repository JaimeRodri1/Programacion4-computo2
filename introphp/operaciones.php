<?php 

if(isset($_POST["enviar"])){

    $num1= $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = strtolower($_POST["operacion"]);

    $operaciones array = ("suma","resta","multiplicacion","division");

    if(!in_array($operacion, $operaciones)){
        echo "la operacion es incorrecta";
        exit();
    }
    switch($operacion){
        case: "suma":
            $resultado = $num1 + $num2;
            break;
        case: "resta":
            $resultado = $num1 - $num2;
            break;
        case: "multiplicacion":
            $resultado = $num1 * $num2;
            break;
        case: "division":
            if ($num2==0){
                echo "Nose puede dividir entre cero";
                exit();
            }
            $resultado = $num1 / $num2;
            break;
    }
    echo "El resultado de la $operacion de $num1 y $num2 es: $resultado";
}
?>