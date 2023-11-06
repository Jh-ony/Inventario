
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlPerifericos&accion=nuevo">Nuevo Periferico</a>
    <!--<a href="?ctrl=CtrlPerifericos&accion=busqueda">Buscar</a>-->
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Estado</th>
            <th>Nombre</th>
            <th>Foto</th>
            <th>Descripcion</th>
            <th>Observaciones</th>
            <th>Opciones</th>
        </tr>
<?php
if (is_array($datos))
foreach ($datos as $d) {
    ?>
    <tr>
        <td>
            <?=$d['id']?>
        </td>
        <td>
            <?=$d['Estado_Equipo']?>
        </td>
        <td>
            <?=$d['nombre']?>
        </td>
        <td>
            <?=$d['foto']?>
        </td>
        <td>
            <?=$d['descripcion']?>
        </td>
        <td>
            <?=$d['observaciones']?>
        </td>
        <td>
            
           <a href="?ctrl=CtrlPerifericos&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlPerifericos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>


 