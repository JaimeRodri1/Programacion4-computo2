<?php

    
    include "functions.php";

    
    $action =$_POST ['action'];

   
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    
    if($action == "guardar"){
        
        saveData($name, $lastname, $age);
        
        header('Location: index.php');
    }
        if($action == "editar"){
        $cod = $_POST['cod'];

        //actualizar datos
        updateData($cod, $name, $lastname, $age);

        //redirigir
        header('Location: index.php');
    }

    //eliminar registro
    if($action == "eliminar"){
        $cod = $_POST['cod'];

        //llamando a la funcion eliminar
        deleteData($cod);

        header('Location: index.php');
    }

?>