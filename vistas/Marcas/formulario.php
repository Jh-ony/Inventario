<?php
$id = isset($obj['id'])?$obj['id']:'';
$nombre = isset($obj['nombre'])?$obj['nombre']:'';

# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nueva Marca':'Editando Marca';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
            <div class="titulo2">
            <h1><?=$titulo?></h1>
            </div>
            <form action="?ctrl=CtrlMarcas&accion=guardar" method="post">

            id:
            <input class="form-control" type="text" name="id" value="<?=$id?>" readonly>
            <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
            <br>
            Marca:
            <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
            <br>
            <br>

            <input class="form-control" type="submit" value="Guardar">

            </form>
            <a href="?ctrl=CtrlMarcas">Retornar</a>
</body>
</html>