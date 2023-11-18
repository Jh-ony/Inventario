<?php
$id = isset($obj['id'])?$obj['id']:'';
$nombre = isset($obj['nombre'])?$obj['nombre']:'';
$idOficina = isset($obj['idOficina'])?$obj['idOficina']:'';
# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nueva Area':'Editar Area';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">-->
</head>
<body>
    <div class="caja-form">
            <div class="titulo2">
            <h1><?=$titulo?></h1>
            </div>
            <form action="?ctrl=CtrlArea&accion=guardar" method="post">

            <div class="atributo">
            ID
            </div>
            <br>
            <input class="form" type="text" name="id" value="<?=$id?>" readonly>
            <input class="form" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
            <br><br>
            <div class="atributo">
                
            Area
            </div>
            <br>
            <input class="form" type="text" name="nombre" value="<?=$nombre?>">
            <br>
            <br>
            <div class="atributo">
            Oficina
            </div>
            <br>
            <select class="form" name="idOficina" id="">
                <?php
                if (is_array($oficinas))
                foreach ($oficinas as $o) {
                    
                    $select=($idOficina==$o['id'])?'selected':'';
                ?>
                <option <?=$select?> value="<?=$o['id']?>">
                    <?=$o['nombre']?>
                </option>
                <?php } ?>
            </select>

                    
            
            <br>
            <br>
            <br>
            
            <input class="form" id=guardar type="submit" value="Guardar">
            </form>
                    <br>
            <a href="?ctrl=CtrlArea" class=button2>
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>     
            Retornar</a>

    </div>
</body>
</html>