<div class="contenido">

            <div class="titulo">
            <h1><?=$titulo?></h1>
            </div>

            <div class="datos">

                <a href="?" class=button>
                <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>    
                Retornar</a>

                <div class="interior">
                    
                    <table class="tabla">
                        <tr>
                            <th>ID</th>
                            <th>ID Asignacion</th>
                            <th>ID Equipo</th>

                            <th>Observaciones</th>
                            <th>Cantidad</th>
                    
                            <th class=noColor>
                    <!-- Agregar -->
                    
                            <a href="?ctrl=CtrlDetallesAsignacion&accion=nuevo" class=button id=nuevo>
                            <i class="fa-solid fa-plus" style="color: #000000;"></i>
                            </a>
                    </th>
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
                            <?=$d['idAsignacion']?>
                        </td>
                        <td>
                            <?=$d['idEquipo']?>
                        </td>
                        <td>
                            <?=$d['observaciones']?>
                        </td>
                        <td>
                            <?=$d['cantidad']?>
                        </td>
                    
                        <td class=noColor>
                    

                        <a href="?ctrl=CtrlDetallesAsignacion&accion=editar&id=<?=$d['id']?>" class=button id=editar>
                        <i class="fa-regular fa-pen-to-square" style="color: #0fc5d2;"></i>
                        </a>
        
                            
                        <a href="?ctrl=CtrlDetallesAsignacion&accion=eliminar&id=<?=$d['id']?>" class=button id=eliminar>
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