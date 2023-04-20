<?php

   
    include "functions.php";
    $data = getData();


?>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $cod => $record){?>
        <tr>
            <td><?php echo $record['name']; ?> </td>
            <td><?php echo $record['lastname']; ?> </td>
            <td><?php echo $record['age']; ?> </td>
            <td>
                <a href="form.php?cod=<?php echo $cod; ?>"> Editar </a>

                <form action="crud.php" method="POST">
                <br/>
                    <input type="hidden" name="action" value="eliminar" />
                    <input type="hidden" name="cod" value="<?php echo $cod; ?>" />
                    <button type="submit" onclick="return confirm('Esta seguro que desea eliminar el registro?');">Eliminar</button>
                </form>
            </td>
        </tr> 
        <?php } ?>
    </tbody>
</table>
<a href="form.php">Nuevo Registro</a>
