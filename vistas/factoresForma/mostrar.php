
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlFactorForma&accion=nuevo">Nuevo Factor de Forma</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Factor</th>
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
            
           <a href="?ctrl=CtrlFactorForma&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlFactorForma&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>