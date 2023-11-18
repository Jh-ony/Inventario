<div class="contenido">
            <div class="titulo">
            <h1><?=$titulo?></h1>
            </div>

    <div class="datos">
            <a href="?" class=button>
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>    
            Retornar</a>

            <div class="interior">
                <table class="tabla-larga">
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
                        

                        <th class=noColor>
                        <a href="?ctrl=CtrlEquipos&accion=nuevo" class=button id=nuevo>
                        <i class="fa-solid fa-plus" style="color: #000000;"></i>
                        </a></th>
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

                    <td class=noColor>
                    

                    <a href="?ctrl=CtrlEquipos&accion=editar&id=<?=$d['id']?>" class=button id=editar>
                    <i class="fa-regular fa-pen-to-square" style="color: #0fc5d2;"></i>
                    </a>
                    <a href="?ctrl=CtrlEquipos&accion=eliminar&id=<?=$d['id']?>" class=button id=eliminar>
                    <i class="fa-regular fa-trash-can" style="color: #ffffff;">
                    </i></a>
                    
                    </td>
                </tr>


                <?php
            }
            ?>


                </table>

                
        </div>
    </div>

</div>