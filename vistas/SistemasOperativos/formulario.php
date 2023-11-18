<?php
$id = isset($obj['id'])?$obj['id']:'';
$nombre = isset($obj['nombre'])?$obj['nombre']:'';

# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nuevo Sistema Operativo':'Editar Sistema Operativo';
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
            <form action="?ctrl=CtrlSistemasOperativos&accion=guardar" method="post">

            <div class="atributo">
            ID
            </div>
            <br>
            <input class="form" type="text" name="id" value="<?=$id?>" readonly>
            <input class="form" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
            <br><br>
            <div class="atributo" id=at-largo>
            Sistema Operativo
            </div>
            <br>
            <input class="form" type="text" name="nombre" value="<?=$nombre?>">
        <br>
        <br>
            <input class="form" id=guardar type="submit" value="Guardar">

            </form>
            <a href="?ctrl=CtrlSistemasOperativos" class=button2>
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>         
            Retornar</a>

    </div>
</body>
</html>