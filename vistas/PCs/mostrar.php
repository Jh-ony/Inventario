
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlPCs&accion=nuevo">Nuevo PCs</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>PCs</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Tipo de Procesador</th>
            <th>Detalles del Procesador</th>
            <th>Sistema Operativo</th>
            <th>Detalles del SO</th>
            <th>Estado</th>
            <th>Factor de forma</th>
            <th>Detalles del Factor de forma</th>
            <th>Observaciones</th>
            <th>Direcciones IP</th>
            <th>Mascara de red</th>
            <th>Puerta de enlace</th>
            <th>DNS1</th>
            <th>DNS2</th>
            <th>Numero de serie</th>
            <th>Foto</th>
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
            <?=$d['nombrePC']?>
        </td>
        <td>
            <?=$d['usuarioPC']?>
        </td>
        <td>
            <?=$d['clavePC']?>
        </td>
        <td>
            <?=$d['Nombre_Procesadores']?>
        </td>
        <td>
            <?=$d['detallesTipoProcesador']?>
        </td>
        <td>
            <?=$d['Nombre_Operativos']?>
        </td>
        <td>
            <?=$d['detallesSO']?>
        </td>
        <td>
            <?=$d['Estado_Equipo']?>
        </td>
        <td>
            <?=$d['Nombre_FactorF']?>
        </td>
        <td>
            <?=$d['detallesFactorForma']?>
        </td>
        <td>
            <?=$d['observaciones']?>
        </td>
        <td>
            <?=$d['direccionIP']?>
        </td>
        <td>
            <?=$d['mascaraRed']?>
        </td>
        <td>
            <?=$d['PuertaEnlace']?>
        </td>
        <td>
            <?=$d['DNS1']?>
        </td>
        <td>
            <?=$d['DNS2']?>
        </td>
        <td>
            <?=$d['numeroSerie']?>
        </td>
        <td>
            <?=$d['foto']?>
        </td>


        <td>
            
           <a href="?ctrl=CtrlPCs&accion=editar&id=<?=$d['id']?>">Editar</a>

           <a href="?ctrl=CtrlPCs&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            
        </td>
    </tr>


    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
