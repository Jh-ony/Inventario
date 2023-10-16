
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlAsignacionBienes&accion=nuevo">Nueva Asignacion</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Fecha</th>
            <th>ID Servidor Publico</th>
            <th>ID Estado</th>
            <th>ID Jefe Inmediatoo</th>
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
            <?=$d['fecha']?>
        </td>
        <td>
            <?=$d['idServidorPublico']?>
        </td>
        <td>
            <?=$d['Estado_Bienes']?>
        </td>
        <td>
            <?=$d['Nombre_Jefe']?> <?=$d['Apellido_Jefe']?>
        </td>
        <td>
            
           <a href="?ctrl=CtrlAsignacionBienes&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlAsignacionBienes&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
