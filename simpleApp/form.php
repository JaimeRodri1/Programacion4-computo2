<?php
    include "functions.php";

    //verificamos si va a editar o agregar nuevo registro
    if(isset($_GET['cod'])){
        $cod=$_GET['cod'];
        $data= getData();
        //sirve para ir a traer la informacion que se tiene en el archivo
        //o para presentar datos vacios
        $record=$data[$cod];
        $action="editar";
    }else{
        $record= array(
            'cod' => '',
            'name' => '',
            'lastname' => '',
            'age' => ''
        );
    $action ="guardar";
}
?>

<form action="crud.php" method="POST">
    <input type="hidden" name="action" value="<?php echo $action; ?>">
    <?php if($action == "editar"){ ?>
        <input type="hidden" name="cod" value="<?php echo $cod; ?>" />
    <?php
    } ?>

    Nombre
    <input type="text" name="name" id="name" value="<?php echo $record['name']; ?>">
    Apellido
    <input type="text" name="lastname" id="lastname" value="<?php echo $record['lastname']; ?>">
    Edad
    <input type="text" name="age" id="age" value="<?php echo $record['age']; ?>">
    <button type="submit"> Guardar </button>
</form>