
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlPCs&accion=nuevo">Nuevo PCs</a>



    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>PCs</th>
            <th>Usuario</th>
            <th>Clave</th>
            
            
            
            
            <th>Estado</th>
            
            <th></th>
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
            <?=$d['nombrePC']?>
        </td>
        <td>
            <?=$d['usuarioPC']?>
        </td>
        <td>
            <?=$d['clavePC']?>
        </td>
       
        <td>
            <?=$d['Estado_Equipo']?>
        </td>
       

        <td>
            
           <a href="?ctrl=CtrlPCs&accion=detalles&id=<?=$d['id']?>">Detalles</a>
           <a href="?ctrl=CtrlPCs&accion=editar&id=<?=$d['id']?>">Editar</a>


        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?ctrl=CtrlPCs">Retornar</a>
