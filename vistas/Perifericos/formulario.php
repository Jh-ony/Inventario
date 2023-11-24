<?php
$id = isset($obj['id'])?$obj['id']:'';

$idEstado = isset($obj['idEstado']) ? $obj['idEstado'] : '';
$nombre = isset($obj['nombre']) ? $obj['nombre'] : '';
$descripcion = isset($obj['descripcion']) ? $obj['descripcion'] : '';
$foto = isset($obj['foto']) ? $obj['foto'] : '';
$observaciones = isset($obj['observaciones']) ? $obj['observaciones'] : '';

$detalles = isset($obj['detalles']) ? $obj['detalles'] : '';
# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nueva Periferico':'Editando Periferico';
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
    <form action="?ctrl=CtrlPerifericos&accion=guardar" method="post">

    id:
    <!-- <input class="form-control" type="text" name="id" value="<?=$id?>">
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>"> -->
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <select class="form-control" name="id" value= "<?$id?>">
        
            <?php
            if (is_array($equipo))
            foreach ($equipo as $eq) {
                $selected = ($eq['id']==$idEquipo)?'selected':'';
            ?>
            <option value="<?=$eq['id']?>" <?=$selected?>><?=$eq['id']?></option>
            <?php
            }
            ?> 
    </select>
    <br>
    <br>
    Nombre:
    <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
    <br>
    <br>
    ID Estado:
    <select class="form-control" name="idEstado">
            <?php
            if (is_array($estado))
            foreach ($estado as $e) {
                $selected = ($e['id']==$idEstado)?'selected':'';
            ?>
            <option value="<?=$e['id']?>" <?=$selected?>><?=$e['nombre']?></option>
            <?php
            }
            ?>
    </select>
    <br>
    <br>
    Descripcion:
    <input class="form-control" type="text" name="descripcion" value="<?=$descripcion?>">
    <br>
    <br>
    Foto:
    <input class="form-control" type="text" name="foto" value="<?=$foto?>">
    <br>
    <br>
    Observaciones:
    <input class="form-control" type="text" name="observaciones" value="<?=$observaciones?>">
    <br>

    <input class="form-control" type="submit" value="Guardar">
    <br>
   
    </form>
    <a href="?ctrl=CtrlPerifericos">Retornar</a>
</body>
</html>