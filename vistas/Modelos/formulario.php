<?php
$id = isset($obj['id'])?$obj['id']:'';
$nombre = isset($obj['nombre'])?$obj['nombre']:'';
$detalles = isset($obj['detalles'])?$obj['detalles']:'';
$idMarca = isset($obj['idMarca'])?$obj['idMarca']:'';

# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nuevo Modelo':'Editando Modelo';
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
            <h1><?=$titulo?></h1>
            <form action="?ctrl=CtrlModelos&accion=guardar" method="post">

            <div class="atributo">
            ID
            </div>
            <br>
            <input class="form" type="text" name="id" value="<?=$id?>" readonly>
            <input class="form" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
            <br>
            <br>
            <div class="atributo">
            Modelo
            </div>
            <br>
            <input class="form" type="text" name="nombre" value="<?=$nombre?>">
            <br>
            <br>
            <div class="atributo">
            Detalles
            </div>
            <br>
            <input class="form" type="text" name="detalles" value="<?=$detalles?>">
            <br>
            <br>
            <div class="atributo">
            Marca
            </div>
            <br>
            <select class="form" name="idMarca"value >
                <option>*Seleccioone Marca</option>
                    <?php
                    if (is_array($marcas))
                    foreach ($marcas as $m) {
                        $selected = ($m['id']==$idMarca)?'selected':'';
                    ?>
                    <option value="<?=$m['id']?>" <?=$selected?>><?=$m['nombre']?></option>
                    <?php
                    }
                    ?>
            </select>

            <br>
            <br>
            <input class="form" type="submit" id="guardar" value="Guardar">

            </form>
            <br>
            <a href="?ctrl=CtrlModelos" class=button2>
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>     
            Retornar</a>

    </div>

</body>
</html>