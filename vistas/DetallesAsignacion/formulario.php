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
    
</head>
<body>

<div class="caja-form">
            <div class="titulo2">
            <h1><?=$titulo?></h1>
            </div>
            <form action="?ctrl=CtrlDetallesAsignacion&accion=guardar" method="post">

            <div class="atributo">
            ID
            </div>
            <br>
            <input class="form" type="text" name="id" value="<?=$id?>" readonly>
            <input class="form" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
            <br>
            <br>

            <div class="atributo">
            Asignacion
            </div>
            <br>
            <select class="form" name="idAsignacion"value >
                    <?php
                    if (is_array($asignacion))
                    foreach ($asignacion as $a) {
                        $selected = ($a['id']==$idAsignacion)?'selected':'';
                    ?>
                    <option value="<?=$a['id']?>" <?=$selected?>><?=$a['id']?></option>
                    <?php
                    }
                    ?>
            </select>
            <br>
            <br>

            <div class="atributo">
            Equipo
            </div>
            <br>
            <select class="form" name="idEquipo"value >
                    <?php
                    if (is_array($equipos))
                    foreach ($equipos as $eq) {
                        $selected = ($eq['id']==$idEquipo)?'selected':'';
                    ?>
                    <option value="<?=$eq['id']?>" <?=$selected?>><?=$eq['id']?></option>
                    <?php
                    }
                    ?>
            </select>
            <br>
            <br>

            <div class="atributo">
            Observaciones
            </div>
            <br>
            <input class="form" type="text" name="observaciones" value="<?=$observaciones?>">
            <br>
            <br>

            <div class="atributo">
            Cantidad
            </div>
            <br>
            <input class="form" type="text" name="cantidad" value="<?=$cantidad?>">
            <br>
            <br>
        
            <input class="form" type="submit" id="guardar" value="Guardar">

            </form>
            <br>
            <a href="?ctrl=CtrlDetallesAsignacion" class=button2>
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>     
            Retornar</a>

</div>
</body>
</html>