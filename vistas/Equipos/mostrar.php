
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlEquipos&accion=nuevo">Nuevo Equipo</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Fecha de Compra</th>
            <th>Codigo Patrimonial</th>
            <th>Color</th>
            <th>Observaciones</th>
            <th>Foto</th>
            <th>Valor de Compra</th>
            <th>Numero PECOSA</th>
            <th>Numero OC</th>
            <th>Dimensiones</th>
            

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
            <?=$d['fechaCompra']?>
        </td>
        <td>
            <?=$d['codigoPatrimonial']?>
        </td>
        <td>
            <?=$d['color']?>
        </td>
        <td>
            <?=$d['observaciones']?>
        </td>
        <td>
            <?=$d['foto']?>
        </td>
        <td>
            <?=$d['valorCompra']?>
        </td>
        <td>
            <?=$d['numeroPECOSA']?>
        </td>
        <td>
            <?=$d['numeroOC']?>
        </td>
        <td>
            <?=$d['dimensiones']?>
        </td>

        <td>
            
           <a href="?ctrl=CtrlEquipos&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlEquipos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
