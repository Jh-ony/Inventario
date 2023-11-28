<?php
$id = isset($obj['id'])?$obj['id']:'';
$idTipoProcesador = isset($obj['idTipoProcesador'])?$obj['idTipoProcesador']:'';
$detallesSO = isset($obj['detallesSO'])?$obj['detallesSO']:'';
$idSO = isset($obj['idSO'])?$obj['idSO']:'';
$detallesTipoProcesador = isset($obj['detallesTipoProcesador'])?$obj['detallesTipoProcesador']:'';
$idEstado = isset($obj['idEstado'])?$obj['idEstado']:'';
$idFactorForma = isset($obj['idFactorForma'])?$obj['idFactorForma']:'';
$detallesFactorForma = isset($obj['detallesFactorForma'])?$obj['detallesFactorForma']:'';
$observaciones = isset($obj['observaciones'])?$obj['observaciones']:'';
$direccionIP = isset($obj['direccionIP'])?$obj['direccionIP']:'';
$mascaraRed = isset($obj['mascaraRed'])?$obj['mascaraRed']:'';
$PuertaEnlace = isset($obj['PuertaEnlace'])?$obj['PuertaEnlace']:'';
$DNS1 = isset($obj['DNS1'])?$obj['DNS1']:'';
$DNS2 = isset($obj['DNS2'])?$obj['DNS2']:'';
$numeroSerie = isset($obj['numeroSerie'])?$obj['numeroSerie']:'';
$nombresPC = isset($obj['nombrePC'])?$obj['nombrePC']:'';
$usuarioPC = isset($obj['usuarioPC'])?$obj['usuarioPC']:'';
$clavePC = isset($obj['clavePC'])?$obj['clavePC']:'';
$foto = isset($obj['foto'])?$obj['foto']:'';


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
   
</head>
<body>
    <div class="caja-form">
        <div class="titulo2">
            <h1><?=$titulo?></h1>
        </div>
            <form action="?ctrl=CtrlPCs&accion=guardar" method="post">

            <div class="atributo">
            ID
            </div>
            <br>
            <input class="form" type="text" name="id" value="<?=$id?>">
            <input class="form" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
            
            <br>
            <br>
            <div class="atributo">
            Nombre de PC
            </div>
            <br>
            <input class="form" type="text" name="nombrePC" value="<?=$nombresPC?>">
            <br>
            <br>
            <div class="atributo">
            Nombre de Usuario
            </div>
            <br>
            
            <input class="form" type="text" name="usuarioPC" value="<?=$usuarioPC?>">
            <br>
            <br>
            <div class="atributo">
            Clave
            </div>
            <br>
            <input class="form" type="text" name="clavePC" value="<?=$clavePC?>">
            <br>
            <br>

            <div class="atributo">
            Procesador
            </div>
            <br>
            <select class="form" name="idTipoProcesador">
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
            <br>
            <div class="atributo">
            Detalles del Procesador
            </div>
            <br>
            <input class="form" type="text" name="detallesTipoProcesador" value="<?=$detallesTipoProcesador?>">
            <br>
            <br>
            <div class="atributo">
            Sistema Operativo
            </div>
            <br>
            <select class="form" name="idSO">
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
            <br>
            <div class="atributo">
            Detalles del SO
            </div>
            <br>
            <input class="form" type="text" name="detallesSO" value="<?=$detallesSO?>">
            <br>  
            <br>
            <div class="atributo">
            Estado
            </div>
            <br>
            <select class="form" name="idEstado">
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
            <br>
            <div class="atributo">
            Factor de Forma
            </div>
            <br>
            <select class="form" name="idFactorForma">
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
            <br>
            <div class="atributo">
            Detalles del FF
            </div>
            <br>
            <input class="form" type="text" name="detallesFactorForma" value="<?=$detallesFactorForma?>">
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
            Direccion IP
            </div>
            <br>
            <input class="form" type="text" name="direccionIP" value="<?=$direccionIP?>">
            <br>
            <br>

            <div class="atributo">
            Mascara de red
            </div>
            <br>
            <input class="form" type="text" name="mascaraRed" value="<?=$mascaraRed?>">
            <br>
            <br>

            <div class="atributo">
            Puerto de enlace
            </div>
            <br>
            <input class="form" type="text" name="PuertaEnlace" value="<?=$PuertaEnlace?>">
            <br>
            <br>

            <div class="atributo">
            DNS 1
            </div>
            <br>
            <input class="form" type="text" name="DNS1" value="<?=$DNS1?>">
            <br>
            <br>

            <div class="atributo">
            DNS 2
            </div>
            <br>
            <input class="form" type="text" name="DNS2" value="<?=$DNS2?>">
            <br>
            <br>

            <div class="atributo">
            N. de Serie
            </div>
            <br>
            <input class="form" type="text" name="numeroSerie" value="<?=$numeroSerie?>">
            <br>
            <br>

            <div class="atributo">
            Foto
            </div>
            <br>
            <input class="form" type="text" name="foto" value="<?=$foto?>">
            <br>
            <br>
            <div class="atributo">
            Motivo de la baja
            </div>
            <br>
        <input type="text" class="form" name="motivo" placeholder="Si se cambia a almacen, explique el motivo">
        <br>
        <br>
        <br/>
        <input class="form" type="submit" class="form" id="guardar" value="Guardar">
            <br>
            <br>
            </form>
            <a href="?ctrl=CtrlPCs" class="button2">
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i> 
            Retornar</a>

    </div>
</body>
</html>