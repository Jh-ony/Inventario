<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    
</head>
<body>
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlPerifericos&accion=nuevo">Nuevo Periferico</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Estado</th>
            <th>Nombre</th>
            <th>Foto</th>
            <th>Descripcion</th>
            <th>Observaciones</th>
            <th>Opciones</th>
        </tr>
<?php
if (is_array($datos))
foreach ($datos as $d) {
    ?>
    <tr>
        <td>
            <?=$d['id']?>
        </td>
        <td>
            <?=$d['idEstado']?>
        </td>
        <td>
            <?=$d['nombre']?>
        </td>
        <td>
            <?=$d['foto']?>
        </td>
        <td>
            <?=$d['descripcion']?>
        </td>
        <td>
            <?=$d['observaciones']?>
        </td>
        <td>
            
           <a href="?ctrl=CtrlPerifericos&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlPerifericos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
</body>
</html>