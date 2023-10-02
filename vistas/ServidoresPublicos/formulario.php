<?php
$id = isset($obj['id'])?$obj['id']:'';
$idCargo = isset($obj['idCargo'])?$obj['idCargo']:'';
$idArea = isset($obj['idArea'])?$obj['idArea']:'';
$idOficina = isset($obj['idOficina'])?$obj['idOficina']:'';
$fecha_inicio = isset($obj['fecha_inicio'])?$obj['fecha_inicio']:'';
$fecha_fin = isset($obj['fecha_fin'])?$obj['fecha_fin']:'';
# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nuevo Servidor Publico':'Editar Servidor Publico';
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
    <form action="?ctrl=CtrlServidoresPublicos&accion=guardar" method="post">

    id:
    <input class="form-control" type="text" name="id" value="<?=$id?>" readonly>
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <br>
    fecha_inicio:
    <input class="form-control" type="date" name="fecha_inicio" value="<?=$fecha_inicio?>">
    <br>
    fecha_fin:
    <input class="form-control" type="date" name="fecha_fin" value="<?=$fecha_fin?>">
    <br>
    Cargo:
    <select class="form-control" name="idCargo" id="">
        <?php
        if (is_array($Cargo))
        foreach ($Cargo as $c) {
            
            $select=($idCargo==$c['id'])?'selected':'';
        ?>
        <option <?=$select?> value="<?=$c['id']?>">
            <?=$c['nombre']?>
        </option>
        <?php } ?>
    </select>
    <br>
    Area:
    <select class="form-control" name="idArea" id="">
        <?php
        if (is_array($Area))
        foreach ($Area as $a) {
            
            $select=($idArea==$a['id'])?'selected':'';
        ?>
        <option <?=$select?> value="<?=$a['id']?>">
            <?=$a['nombre']?>
        </option>
        <?php } ?>
    </select>
    <br>
    Oficina:
    <select class="form-control" name="idOficina" id="">
        <?php
        if (is_array($Oficina))
        foreach ($Oficina as $o) {
            
            $select=($idOficina==$o['id'])?'selected':'';
        ?>
        <option <?=$select?> value="<?=$o['id']?>">
            <?=$o['nombre']?>
        </option>
        <?php } ?>
    </select>
    <br>
    

    

    <br>
    <input class="form-control" type="submit" value="Guardar">

    </form>
    <a href="?ctrl=CtrlServidoresPublicos">Retornar</a>
</body>
</html>