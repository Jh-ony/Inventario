
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlServidoresPublicos&accion=nuevo">Nuevo Servidor Publico</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Cargo</th>
            <th>Area</th>
            <th>Oficina</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
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
            <?=$d['idCargo']?>
        </td>
        <td>
            <?=$d['idArea']?>
        </td>
        <td>
            <?=$d['idOficina']?>
        </td>
        <td>
            <?=$d['fecha_inicio']?>
        </td>
        <td>
            <?=$d['fecha_fin']?>
        </td>
        <td>
            
           <a href="?ctrl=CtrlServidoresPublicos&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlServidoresPublicos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
