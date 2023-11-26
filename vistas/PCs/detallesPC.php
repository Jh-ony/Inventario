
<div class="contenido">
<br>
<div class="datosPC">
    
<div class="interior-pc">
<?php
if (is_array($data))
foreach ($data as $d) {
    ?>
    
        <div class="tabla-exterior">
            <table class="tabla-pc">
                <tr>
                <td>Marca</td>
                <td>Lenovo</td>
                </tr>
                <td>Modelo</td>
                <td>ThinkStatio 360</td>
                
            </table>

        </div>

            <?=$d['id']?>

            <?=$d['nombrePC']?>

            <?=$d['usuarioPC']?>

            <?=$d['clavePC']?>

            <?=$d['Nombre_Procesadores']?>

            <?=$d['detallesTipoProcesador']?>

            <?=$d['Nombre_Operativos']?>

            <?=$d['detallesSO']?>

            <?=$d['Estado_Equipo']?>

            <?=$d['Nombre_FactorF']?>

            <?=$d['detallesFactorForma']?>

            <?=$d['observaciones']?>
 
            <?=$d['direccionIP']?>

            <?=$d['mascaraRed']?>

            <?=$d['PuertaEnlace']?>

            <?=$d['DNS1']?>

            <?=$d['DNS2']?>

            <?=$d['numeroSerie']?>

            <?=$d['foto']?>

            
           <a href="?ctrl=CtrlPCs&accion=editar&id=<?=$d['id']?>">Editar</a>

           <a href="?ctrl=CtrlPCs&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
            



    <?php
}
?>


    </table>

    <a href="?">Retornar</a>
    </div>
    </div>
    </div>