<?php
$id = isset($obj['id'])?$obj['id']:'';
$nombre = isset($obj['nombre'])?$obj['nombre']:'';
# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo

?>

    <h1>Nuevo Cargo</h1>
    <form action="?ctrl=CtrlCargo&accion=guardar" method="post">

    id:
    <input class="form-control" type="text" type name="id" value="<?=$id?>" readonly>
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <br>
    Cargo:
    <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
    <br>
    <br>
    <input class="form-control" type="submit" width=50% value="Guardar">

    </form>
    <a href="?ctrl=CtrlCargo">Retornar</a>
