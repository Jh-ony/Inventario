<?php
$id = isset($obj['id'])?$obj['id']:'';
$fecha = isset($obj['fecha'])?$obj['fecha']:'';
$idServidorPublico = isset($obj['idServidorPublico'])?$obj['idServidorPublico']:'';
$idEstado = isset($obj['idEstado'])?$obj['idEstado']:'';
$idJefeInmediato = isset($obj['idJefeInmediato'])?$obj['idJefeInmediato']:'';

# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nueva Asignacion':'Editando Asignacion';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignacion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <h1><?=$titulo?></h1>
    <form action="?ctrl=CtrlAsignacionBienes&accion=guardar" method="post">

    id:
    <input class="form-control" type="text" name="id" value="<?=$id?>" readonly>
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <br>
    Fecha:
    <input class="form-control" type="date" name="fecha" value="<?=$fecha?>">
    <br>
    ID Servido Publico:
    <input class="form-control" type="text" name="idServidorPublico" value="<?=$idServidorPublico?>">
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
    ID Jefe inmediato:
    <input class="form-control" type="text" name="idJefeinmediato" value="<?=$idJefeInmediato?>">
    <br>
    <input class="form-control" type="submit" value="Guardar">

    </form>
    <a href="?ctrl=CtrlAsignacionBienes">Retornar</a>
</body>
</html>