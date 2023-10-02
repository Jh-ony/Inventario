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
    <a href="?ctrl=CtrlServidoresPublicos&accion=nuevo">Nuevo Servidor Publico</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Cargo</th>
            <th>Area</th>
            <th>Oficina</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Opciones</th>
        </tr>
<?php
if (is_array($data))
foreach ($data as $d) {
    ?>
    <tr>
        <td>
            <?=$d['id']?>
        </td>
        <td>
            <?=$d['cargo']?>
        </td>
        <td>
            <?=$d['area']?>
        </td>
        <td>
            <?=$d['oficina']?>
        </td>
        <td>
            <?=$d['fecha inicio']?>
        </td>
        <td>
            <?=$d['fecha fin']?>
        </td>
        <td>
            
           <a href="?ctrl=CtrlServidoresPublicos&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlServidoresPublicos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
</body>
</html>