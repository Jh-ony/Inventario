
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlModelos&accion=nuevo">Nuevo Modelo</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Detalles</th>
            <th>Marca</th>
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
            <?=$d['detalles']?>
        </td>
        <td>
            <?=$d['Nombre_Marca']?>
        </td>
        <td>
            
           <a href="?ctrl=CtrlModelos&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlModelos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
