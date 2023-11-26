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
    

</head>
<body>
    <div class="caja-form">

            <div class="titulo2">
            <h1><?=$titulo?></h1>
            </div>

            <form action="?ctrl=CtrlAsignacionBienes&accion=guardar" method="post">

            <div class="atributo">
            ID
            </div>
            <br>
            <input class="form" type="text" name="id" value="<?=$id?>" readonly>
            <input class="form" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
            <br>
            <br>
            <div class="atributo">
            Fecha
            </div>
            <br>
            <input class="form" type="date" name="fecha" value="<?=$fecha?>">
            <br>
            <br>
            <div class="atributo">
            Servidor Publico
            </div>
            <br>
            <select class="form" name="idServidorPublico" id="">
                <option value="">*Seleccione Servidor</option>
                <?php
                if (is_array($servidoresPublicos))
                foreach ($servidoresPublicos as $sp) {
                    
                    $select=($idServidorPublico==$sp['id'])?'selected':'';
                ?>
                <option <?=$select?> value="<?=$sp['id']?>">
                    <?=$sp['id']?>
                </option>
                <?php } ?>
            </select>

            <br>
            <br>

            <div class="atributo">
            Estado
            </div>
            <br>
            <select class="form" name="idEstado" id="">
                <option value="">*Seleccione Estado</option>
                <?php
                if (is_array($estados))
                foreach ($estados as $e) {
                    
                    $select=($idEstado==$e['id'])?'selected':'';
                ?>
                <option <?=$select?> value="<?=$e['id']?>">
                    <?=$e['nombre']?>
                </option>
                <?php } ?>
            </select>
            <br>
            <br>
            <div class="atributo">
            Jefe Inmediato
            </div>
            <br>
            <select class="form" name="idPersonas" id="">
                <option value="">*Seleccione Jefe Inmediato</option>
                <?php
                if (is_array($personas))
                foreach ($personas as $p) {
                    
                    $select=($idPersonas==$p['id'])?'selected':'';
                ?>
                <option <?=$select?> value="<?=$p['id']?>">
                    <?=$p['nombres'] ,'&nbsp', $p['apellidos']?>
                </option>
                <?php } ?>
            </select>
            <br>
            <br>
            <input class="form" type="submit" id="guardar" value="Guardar">

            </form>
            <br>
            <a href="?ctrl=CtrlAsignacionBienes" class=button2>
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>     
            Retornar</a>


    </div>
</body>
</html>