
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
                <td>Nombre</td>
                <td><?=$d['nombrePC']?></td>
                </tr>
                <tr>
                <td>Modelo</td>
                <td>ThinkStation 360</td>    
                </tr>
            </table>

            <table class="second-tabla-pc">
                <!-- <tr>
                    <td>Area</td>
                    <td>APSTI</td>
                </tr>
                <tr>
                    <td>Asignado</td>
                    <td>Jhony</td> -->
                </tr>
                <td colspan="2">Estado : <?=$d['Estado_Equipo']?></td>

            </table>

        </div>


    <div class="tablas-detalle">
        <div class="grid-detalles">
        <table class="detalle-general">
            <tr>
                <th>General</th>
            </tr>
            <tr>
                <td>Fecha Compra</td>
                <td><?=$d['fechaCompra']?></td>
            </tr>
            <tr>
                <td>Codigo Patrimonial</td>
                <td><?=$d['codigoPatrimonial']?></td>
            </tr>
            <tr>
                <td>Color</td>
                <td><?=$d['color']?></td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td><?=$d['observaciones']?></td>
            </tr>
            <tr>
                <td>Valor de Compra</td>
                <td><?=$d['valorCompra']?></td>
            </tr>
            <td>Dimesiones</td>
            <td><?=$d['dimensiones']?></td>
        </table>

        <table class="detalle-red">
            <tr>
                <th>Red</th>
            </tr>
            <tr>
                <td>Dirección IP</td>
                <td><?=$d['direccionIP']?></td>
            </tr>
            <tr>
                <td>Puerta de enlace</td>
                <td><?=$d['PuertaEnlace']?></td>
            </tr>
            <tr>
                <td>Mascara de Red</td>
                <td><?=$d['mascaraRed']?></td>
            </tr>
            <tr>
                <td>DNS 1</td>
                <td><?=$d['DNS1']?></td>
            </tr>
            <tr>
                <td>DNS 2</td>
                <td><?=$d['DNS2']?></td>
            </tr>
            <tr>
                <td>Numero de Serie</td>
                <td><?=$d['numeroSerie']?></td>
            </tr>
        </table>
        
        <table class="detalle-hardware">
            <tr>
                <th>Hardware</th>
            </tr>
            <tr>
                <td>Procesador</td>
                <td><?=$d['Nombre_Procesadores']?></td>
            </tr>
            <tr>
                <td>Detalles</td>
                <td><?=$d['detallesTipoProcesador']?></td>
            </tr>
            <tr>
                <td>Factor Forma</td>
                <td><?=$d['Nombre_FactorF']?></td>
            </tr>
            <tr>
                <td>Detalles</td>
                <td><?=$d['detallesFactorForma']?></td>
            </tr>
        </table>

        <table class="detalle-software">
            <tr>
                <th>Software</th>
            </tr>
            <tr>
                <td>Sistema Operativo</td>
                <td><?=$d['Nombre_Operativos']?></td>
            </tr>
            <tr>
                <td>Detalles</td>
                <td><?=$d['detallesSO']?></td>
            </tr>
        </table>
        </div>
    </div>

            <?=$d['id']?>

            <!-- <?=$d['nombrePC']?> -->

            <?=$d['usuarioPC']?>

            <?=$d['clavePC']?>

            <!-- <?=$d['Nombre_Procesadores']?> -->

            <!-- <?=$d['detallesTipoProcesador']?> -->

            <!-- <?=$d['Nombre_Operativos']?> -->

            <!-- <?=$d['detallesSO']?> -->

            <!-- <?=$d['Estado_Equipo']?> -->

            <!-- <?=$d['Nombre_FactorF']?> -->

            <!-- <?=$d['detallesFactorForma']?> -->

            <!-- <?=$d['observaciones']?> -->
 
            <!-- <?=$d['direccionIP']?> -->

            <!-- <?=$d['mascaraRed']?> -->

            <!-- <?=$d['PuertaEnlace']?> -->

            <!-- <?=$d['DNS1']?> -->

            <!-- <?=$d['DNS2']?> -->

            <!-- <?=$d['numeroSerie']?> -->

            <?=$d['foto']?>

         <div class="secc-opciones"> 
           
                <a href="?ctrl=CtrlPCs">Retornar</a>
            <div class="opciones-derecha">
                <a href="?ctrl=CtrlPCs&accion=editar&id=<?=$d['id']?>" class="button-pc">Modificar</a>

                <a href="?ctrl=CtrlPCs&accion=eliminar&id=<?=$d['id']?>" class="button-pc">Eliminar</a>
                </div>
        </div>  


    <?php
}
?>


 

    
    </div>
    </div>
    </div>