
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlDetallesAsignacion&accion=nuevo">Nuevo Modelo</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Observaciones</th>
    
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
            <?=$d['observaciones']?>
        </td>
      
        <td>
            
           <a href="?ctrl=CtrlDetallesAsignacion&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlDetallesAsignacion&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
