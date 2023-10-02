<?php
$id = isset($obj['id'])?$obj['id']:'';
$nombre = isset($obj['nombre'])?$obj['nombre']:'';
$detalles = isset($obj['detalles'])?$obj['detalles']:'';

# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nuevo Modelo':'Editando Modelo';
?>
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
    <form action="?ctrl=CtrlModelos&accion=guardar" method="post">

    id:
    <input class="form-control" type="text" name="id" value="<?=$id?>" readonly>
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <br>
    Modelo:
    <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
    <br>
    Detalles:
    <input class="form-control" type="text" name="detalles" value="<?=$detalles?>">
    <br>
    <input class="form-control" type="submit" value="Guardar">

    </form>
    <a href="?ctrl=CtrlModelos">Retornar</a>
</body>
</html>