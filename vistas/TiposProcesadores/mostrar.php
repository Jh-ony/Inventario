
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlTiposProcesadores&accion=nuevo">Nuevo Tipo de Procesadores</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
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
            <?=$d['nombre']?>
        </td>
       
        <td>
            
           <a href="?ctrl=CtrlTiposProcesadores&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlTiposProcesadores&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
