<?php
$id = isset($obj['$id'])?$obj['$id']:'';
$idTipoProcesador = isset($obj['$idTipoProcesador'])?$obj['$idTipoProcesador']:'';
$detallesSO = isset($obj['$detallesSO'])?$obj['$detallesSO']:'';
$idSO = isset($obj['$idSO'])?$obj['$idSO']:'';
$detallesTipoProcesador = isset($obj['$detallesTipoProcesador'])?$obj['$detallesTipoProcesador']:'';
$idEstado = isset($obj['$idEstado'])?$obj['$idEstado']:'';
$idFactorForma = isset($obj['$idFactorForma'])?$obj['$idFactorForma']:'';
$detallesFactorForma = isset($obj['$detallesFactorForma'])?$obj['$detallesFactorForma']:'';
$observaciones = isset($obj['$observaciones'])?$obj['$observaciones']:'';
$direccionIP = isset($obj['$direccionIP'])?$obj['$direccionIP']:'';
$mascaraRed = isset($obj['$mascaraRed'])?$obj['$mascaraRed']:'';
$PuertaEnlace = isset($obj['$PuertaEnlace'])?$obj['$PuertaEnlace']:'';
$DNS1 = isset($obj['$DNS1'])?$obj['$DNS1']:'';
$DNS2 = isset($obj['$DNS2'])?$obj['$DNS2']:'';
$numeroSerie = isset($obj['$numeroSerie'])?$obj['$numeroSerie']:'';
$nombresPC = isset($obj['$nombresPC'])?$obj['$nombresPC']:'';
$usuarioPC = isset($obj['$usuarioPC'])?$obj['$usuarioPC']:'';
$clavePC = isset($obj['$clavePC'])?$obj['$clavePC']:'';
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

    ID:
    <input class="form-control" type="text" name="id" value="<?=$id?>">
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    
    <br>
    Nombre de PC:
    <input class="form-control" type="text" name="nombrePC" value="<?=$nombresPC?>">
    <br>
  
    Nombre de Usuario:
    <input class="form-control" type="text" name="usuarioPC" value="<?=$usuarioPC?>">
    <br>

    Clave:
    <input class="form-control" type="text" name="clavePC" value="<?=$clavePC?>">
    <br>

    Tipo de Procesador:
    <select class="form-control" name="idTipoProcesador">
            <?php
            if (is_array($tiposProcesadores))
            foreach ($tiposProcesadores as $tP) {
                $selected = ($tP['id']==$idTipoProcesador)?'selected':'';
            ?>
            <option value="<?=$tP['id']?>" <?=$selected?>><?=$tP['nombre']?></option>
            <?php
            }
            ?>
    </select>
    <br>

    Detalles de Procesador:
    <input class="form-control" type="text" name="detallesTipoProcesador" value="<?=$detallesTipoProcesador?>">
    <br>

    Sistema Operativo:
    <select class="form-control" name="idSO">
            <?php
            if (is_array($SO))
            foreach ($SO as $so) {
                $selected = ($so['id']==$idSO)?'selected':'';
            ?>
            <option value="<?=$so['id']?>" <?=$selected?>><?=$so['nombre']?></option>
            <?php
            }
            ?>
    </select>
    <br>

    Detalles de SO:
    <input class="form-control" type="text" name="detallesSO" value="<?=$detallesSO?>">
    <br>  

    Estado:
    <select class="form-control" name="idEstado">
            <?php
            if (is_array($estados))
            foreach ($estados as $e) {
                $selected = ($e['id']==$idEstado)?'selected':'';
            ?>
            <option value="<?=$e['id']?>" <?=$selected?>><?=$e['nombre']?></option>
            <?php
            }
            ?>
    </select>
    <br>
    Factor de Forma:
    <select class="form-control" name="idFactorForma">
            <?php
            if (is_array($factorForma))
            foreach ($factorForma as $ff) {
                $selected = ($ff['id']==$idFactorForma)?'selected':'';
            ?>
            <option value="<?=$ff['id']?>" <?=$selected?>><?=$ff['nombre']?></option>
            <?php
            }
            ?>
    </select>
    <br>
    Detalles de Factor de forma:
    <input class="form-control" type="text" name="detallesFactorForma" value="<?=$detallesFactorForma?>">
    <br>

    Observaciones:
    <input class="form-control" type="text" name="observaciones" value="<?=$observaciones?>">
    <br>

    Direccion IP:
    <input class="form-control" type="text" name="direccionIP" value="<?=$direccionIP?>">
    <br>

    Mascara de red:
    <input class="form-control" type="text" name="mascaraRed" value="<?=$mascaraRed?>">
    <br>

    Puerto de enlace:
    <input class="form-control" type="text" name="PuertaEnlace" value="<?=$PuertaEnlace?>">
    <br>

    DNS1:
    <input class="form-control" type="text" name="DNS1" value="<?=$DNS1?>">
    <br>

    DNS2:
    <input class="form-control" type="text" name="DNS2" value="<?=$DNS2?>">
    <br>

    Numero de Serie:
    <input class="form-control" type="text" name="numeroSerie" value="<?=$numeroSerie?>">
    <br>

    Foto:
    <input class="form-control" type="text" name="foto" value="<?=$foto?>">
    <br>
    <input class="form-control" type="submit" value="Guardar">


<br/>

    </form>
    <a href="?ctrl=CtrlPCs">Retornar</a>
</body>
</html>