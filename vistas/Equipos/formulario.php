<?php
$id = isset($obj['id'])?$obj['id']:'';

$id = isset($obj['id']) ? $obj['id'] : '';
$fechaCompra = isset($obj['fechaCompra']) ? $obj['fechaCompra'] : '';
$codigoPatrimonial = isset($obj['codigoPatrimonial']) ? $obj['codigoPatrimonial'] : '';
$color = isset($obj['color']) ? $obj['color'] : '';
$observaciones = isset($obj['observaciones']) ? $obj['observaciones'] : '';
$foto = isset($obj['foto']) ? $obj['foto'] : '';
$valorCompra = isset($obj['valorCompra']) ? $obj['valorCompra'] : '';
$numeroPECOSA = isset($obj['numeroPECOSA']) ? $obj['numeroPECOSA'] : '';
$numeroOC = isset($obj['numeroOC']) ? $obj['numeroOC'] : '';
$dimensiones = isset($obj['dimensiones']) ? $obj['dimensiones'] : '';

$detalles = isset($obj['detalles']) ? $obj['detalles'] : '';
# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nuevo Equipo':'Editando Equipo';
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
    <form action="?ctrl=CtrlEquipos&accion=guardar" method="post">

    id:
    <input class="form-control" type="text" name="id" value="<?=$id?>" readonly>
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <br>
    Fecha de Compra:
    <input class="form-control" type="date" name="fechaCompra" value="<?=$fechaCompra?>">
    <br>
    Codigo Patrimonial:
    <input class="form-control" type="text" name="codigoPatrimonial" value="<?=$codigoPatrimonial?>">
    <br>
    <br>
    Color:
    <input class="form-control" type="text" name="color" value="<?=$color?>">
    <br>
    <br>
    Observaciones:
    <input class="form-control" type="text" name="observaciones" value="<?=$observaciones?>">
    <br>
    <br>
    Foto:
    <input class="form-control" type="text" name="foto" value="<?=$foto?>">
    <br>
    <br>
    Valor de Compra:
    <input class="form-control" type="text" name="valorCompra" value="<?=$valorCompra?>">
    <br>
    <br>
    Numero PECOSA:
    <input class="form-control" type="text" name="numeroPECOSA" value="<?=$numeroPECOSA?>">
    <br>
    <br>
    Numero OC:
    <input class="form-control" type="text" name="numeroOC" value="<?=$numeroOC?>">
    <br>
    <br>
    Dimensiones:
    <input class="form-control" type="text" name="dimensiones" value="<?=$dimensiones?>">
    <br>
    
    <input class="form-control" type="submit" value="Guardar">

    </form>
    <a href="?ctrl=CtrlEquipos">Retornar</a>
</body>
</html>