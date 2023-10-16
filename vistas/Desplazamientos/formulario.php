<?php
$id = isset($obj['id'])?$obj['id']:'';
$fecha = isset($obj['fecha$fecha'])?$obj['fecha$fecha']:'';
$idServidorOrigen = isset($obj['idServidorOrigen'])?$obj['idServidorOrigen']:'';
$idServidorDestino = isset($obj['idServidorDestino'])?$obj['idServidorDestino']:'';

# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nuevo Desplazamineto':'Editando Desplazamineto';
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
    <form action="?ctrl=CtrlDesplazamientos&accion=guardar" method="post">

    id:
    <input class="form-control" type="text" name="id" value="<?=$id?>" readonly>
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <br>
    Fecha:
    <input class="form-control" type="date" name="fecha" value="<?=$fecha?>">
    <br>
    Servidor Origen
    <select class="form-control" name="idServidorOrigen" id="">
        <?php
        if (is_array($servidoresPublicos))
        foreach ($servidoresPublicos as $spO) {
            
            $select=($idServidorPublico==$spO['id'])?'selected':'';
        ?>
        <option <?=$select?> value="<?=$spO['id']?>">
            <?=$spO['id']?>
        </option>
        <?php } ?>
    </select>
    <br>
    Servidor Destino
    <select class="form-control" name="idServidorDestino" id="">
        <?php
        if (is_array($servidoresPublicos))
        foreach ($servidoresPublicos as $spD) {
            
            $select=($idServidorPublico==$spD['id'])?'selected':'';
        ?>
        <option <?=$select?> value="<?=$spD['id']?>">
            <?=$spD['id']?>
        </option>
        <?php } ?>
    </select>
    <br>
    <input class="form-control" type="submit" value="Guardar">

    </form>
    <a href="?ctrl=CtrlDesplazamientos">Retornar</a>
</body>
</html>