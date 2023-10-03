
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlArea&accion=nuevo">Nueva Area</a>
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>ID Oficina</th>
            <th>Nombre</th>
            <th>Opciones</th>

        </tr>
<?php
if (is_array($data))
foreach ($data as $d) {
    ?>
    <tr>
        <td>
            <?=$d['id']?>
        </td>
        <td>
            <?=$d['idOficina']?>
        </td>
        <td>
            <?=$d['nombre']?>
        </td>

        <td>
            
           <a href="?ctrl=CtrlArea&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlArea&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
