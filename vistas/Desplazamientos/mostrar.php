
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlDesplazamientos&accion=nuevo">Nuevo Desplazamiento</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Fecha</th>
            <th>Servidor de origen</th>
            <th>Servidor Destino</th>
        
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
            <?=$d['idServidorOrigen']?>
        </td>
        <td>
            <?=$d['idServidorDestino']?>
        </td>
        <td>
            
           <a href="?ctrl=CtrlDesplazamientos&accion=editar&id=<?=$d['id']?>"> Editar</a>

           <a href="?ctrl=CtrlDesplazamientos&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
