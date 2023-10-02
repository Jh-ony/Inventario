<?php
$id = isset($obj['$id'])?$obj['$id']:'';
$nombresPC = isset($obj['$nombresPC'])?$obj['$nombresPC']:'';
$usuarioPC = isset($obj['$usuarioPC'])?$obj['$usuarioPC']:'';
$clavePC = isset($obj['$clavePC'])?$obj['$clavePC']:'';
$detallesTipoProcesador = isset($obj['$detallesTipoProcesador'])?$obj['$detallesTipoProcesador']:'';
$detallesSO = isset($obj['$detallesSO'])?$obj['$detallesSO']:'';
$detallesFactorForma = isset($obj['$detallesFactorForma'])?$obj['$detallesFactorForma']:'';
$observaciones = isset($obj['$observaciones'])?$obj['$observaciones']:'';
$direccionesIP = isset($obj['$direccionesIP'])?$obj['$direccionesIP']:'';
$mascaraRed = isset($obj['$mascaraRed'])?$obj['$mascaraRed']:'';
$PuertaEnlace = isset($obj['$PuertaEnlace'])?$obj['$PuertaEnlace']:'';
$DNS1 = isset($obj['$DNS1'])?$obj['$DNS1']:'';
$DNS2 = isset($obj['$DNS2'])?$obj['$DNS2']:'';
$numeroSerie = isset($obj['$numeroSerie'])?$obj['$numeroSerie']:'';
$foto = isset($obj['$foto'])?$obj['$foto']:'';


# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; # 0: Editar / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nueva PCs':'Editar PCs';
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
    <form action="?ctrl=CtrlPCs&accion=guardar" method="post">

    <h4>ID</h4>
    <input class="form-control" type="text" name="id" value="<?=$id?>">
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    
    <br>

    <h4>Nombre de PC</h4>
    <input class="form-control" type="text" name="nombrePC" value="<?=$nombresPC?>">
    <br>
  
    <h4>Usuario</h4>
    <input class="form-control" type="text" name="usuarioPC" value="<?=$usuarioPC?>">
    <br>
 
    <h4>Clave</h4>
    <input class="form-control" type="text" name="clavePC" value="<?=$clavePC?>">
    <br>

    <h4>Detalles de Procesador</h4>
    <input class="form-control" type="text" name="detallesTipoProcesador" value="<?=$detallesTipoProcesador?>">
    <br>

    <h4>Detalles de SO</h4>
    <input class="form-control" type="text" name="detallesSO" value="<?=$detallesSO?>">
    <br>  

    <h4>Detalles de Factor de forma</h4>
    <input class="form-control" type="text" name="detallesFactorForma" value="<?=$detallesFactorForma?>">
    <br>

    <h4>Observaciones</h4>
    <input class="form-control" type="text" name="observaciones" value="<?=$observaciones?>">
    <br>

    <h4>Direccion IP</h4>
    <input class="form-control" type="text" name="direccionesIP" value="<?=$direccionesIP?>">
    <br>

    <h4>Mascara de red</h4>
    <input class="form-control" type="text" name="mascaraRed" value="<?=$mascaraRed?>">
    <br>

    <h4>Puerto de enlace</h4>
    <input class="form-control" type="text" name="PuertaEnlace" value="<?=$PuertaEnlace?>">
    <br>

    <h4>DNS1</h4>
    <input class="form-control" type="text" name="DNS1" value="<?=$DNS1?>">
    <br>

    <h4>DNS2</h4>
    <input class="form-control" type="text" name="DNS2" value="<?=$DNS2?>">
    <br>

    <h4>Numero de Serie</h4>
    <input class="form-control" type="text" name="numeroSerie" value="<?=$numeroSerie?>">
    <br>

    <h4>Foto</h4>
    <input class="form-control" type="text" name="foto" value="<?=$foto?>">
    <br>
    <input class="form-control" type="submit" value="Guardar">


<br/>

    </form>
    <a href="?ctrl=CtrlPCs">Retornar</a>
</body>
</html>