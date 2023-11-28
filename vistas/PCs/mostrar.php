<div class="contenido">

            <div class="titulo">
            <h1><?=$titulo?></h1>
            </div>

            <div class="datos">

                <a href="?" class=button>
                <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>    
                Retornar</a>
      
                <div class="interior">

                    <table class="tabla-pc1">
                        <tr>
                            <th>Id</th>
                            <th>PCs</th>
                            <th>Usuario</th>
                            <th>Clave</th>
                            
                            
                            
                            
                            <th>Estado</th>
                            <th>Mantenimineto</th>
                            <th class="noColor">
                            <a href="?ctrl=CtrlPCs&accion=nuevo" class=button id=nuevo>
                            <i class="fa-solid fa-plus" style="color: #000000;"></i>
                            </a>
                            </th>
                        </tr>
                <?php
                if (is_array($data))
                foreach ($data as $d) {
                    ?>
                <?php

                $estado='';
                    if ($d['Estado_Equipo']=="En almacen") {
                        $estado = "rojo";
                    }
                    else {
                        $estado = "blanco";
                    }
                ?>
                    <tr>
                        <td id=<?=$estado?>>
                            <?=$d['id']?>
                        </td>
                        <td id=<?=$estado?>>
                            <?=$d['nombrePC']?>
                        </td>
                        <td id=<?=$estado?>>
                            <?=$d['usuarioPC']?>
                        </td>
                        <td id=<?=$estado?>>
                            <?=$d['clavePC']?>
                        </td>
                    



                        <td id=<?=$estado?>>
                            <?=$d['Estado_Equipo']?>
                        </td>
                    <td class="noColor">
                        <input type="checkbox" name="as" id="asd">
                    </td>

                        <td class=noColor>
                    
                    <a href="?ctrl=CtrlPCs&accion=cambEst&id=<?=$d['id']?>" class=button id="camb-estado">
                    Cambiar Estado
                    <i class="fa-regular fa-pen-to-square"></i>
                    </a>


                    <!-- <a href="?ctrl=CtrlPCs&accion=editar&id=<?=$d['id']?>" class=button id=editar>
                    <i class="fa-regular fa-pen-to-square" style="color: #0fc5d2;"></i>
                    </a> -->
    


                    <a href="?ctrl=CtrlPCs&accion=detalles&id=<?=$d['id']?>" class=button id="detalles">Detalles
                    <i class="fa-solid fa-bars"></i>
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