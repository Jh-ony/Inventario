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
    
</head>
<body>
<div class="caja-form">
    <div class="titulo2">
    <h1><?=$titulo?></h1>
    </div>
    <form action="?ctrl=CtrlServidoresPublicos&accion=guardar" method="post">

    <div class="atributo">
    ID
    </div>
    <br>
    <input class="form" type="text" name="id" value="<?=$id?>">
    <input class="form" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <br>
    <br>
    <div class="atributo">
    Fecha_inicio
    </div>
    <br>
    <input class="form" type="date" name="fecha_inicio" value="<?=$fecha_inicio?>">
    <br>
    <br>
    <div class="atributo">
    Fecha_fin
    </div>
    <br>
    <input class="form" type="date" name="fecha_fin" value="<?=$fecha_fin?>">
    <br>
    <br>
    <div class="atributo">
    Cargo
    </div>
    <br>
    <select class="form" name="idCargo" id="">
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
    <br>
    <div class="atributo">
    Area
    </div>
    <br>
    
    <select class="form" name="idArea" id="">
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
    <br>
    <div class="atributo">
    Oficina
    </div>
    <br>    
    <select class="form" name="idOficina" id="">
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
    

    

    <br>
    <input class="form" id=guardar type="submit" value="Guardar">

    </form>
    <a href="?ctrl=CtrlServidoresPublicos" class=button2>
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i> 
            Retornar</a>

    </div>
</body>
</html>