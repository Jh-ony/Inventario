
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlOficina&accion=nuevo">Nuevo Oficina</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Oficina</th>
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
            <?=$d['nombre']?>
        </td>
        <td>
            
           <a href="?ctrl=CtrlOficina&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlOficina&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
