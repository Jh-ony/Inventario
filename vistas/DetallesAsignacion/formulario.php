<?php
$id = isset($obj['id'])?$obj['id']:'';
$idAsignacion = isset($obj['idAsignacion'])?$obj['idAsignacion']:'';
$idEquipo = isset($obj['idEquipo'])?$obj['idEquipo']:'';
$observaciones = isset($obj['observaciones'])?$obj['observaciones']:'';
$cantidad = isset($obj['cantidad'])?$obj['cantidad']:'';
# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nuevo Detalle Asignacion':'Editando Detalle Asignacion';
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
    <form action="?ctrl=CtrlDetallesAsignacion&accion=guardar" method="post">

    id:
    <input class="form-control" type="text" name="id" value="<?=$id?>" readonly>
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <br>

    ID Asignacion
    <input class="form-control" type="text" name="idAsignacion" value="<?=$idAsignacion?>">
    <br>
    ID Equipo
    <input class="form-control" type="text" name="idEquipo" value="<?=$idEquipo?>">
    <br>

    Observacion:
    <input class="form-control" type="text" name="observaciones" value="<?=$observaciones?>">
    <br>

    Cantidad
    <input class="form-control" type="text" name="cantidad" value="<?=$cantidad?>">
    <br>
  
    <input class="form-control" type="submit" value="Guardar">

    </form>
    <a href="?ctrl=CtrlDetallesAsignacion">Retornar</a>
</body>
</html>