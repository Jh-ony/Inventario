<div class="contenido">

            <div class="titulo">
            <h1>PCs</h1>
            </div>

            <div class="datos">

                <a href="?" class=button>
                <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>    
                Retornar</a>
        <!-- Seccion de Busqueda -->
        <div class="cont-busqueda">
                <div class="busqueda">
                    
                    <label for="cPatrim" class="pointer">
                    <i class="fa-solid fa-magnifying-glass" style="color: #5deeca;"></i>    
                    Patrimonio</label>
                    
                </div>
                <!-- Por patrimonio -->
                <input type="radio" name="check1" id="cPatrim">
                <div class="patrimonio">
                    <div class="foro">
                    <form action="?ctrl=CtrlPCs&accion=fPatrim" method="post">
                        <input type="text" name="patrim"  class="form" placeholder="Coloque digitos del patrimonio">
                        <input type="submit" value="enviar" class="btn-filtro">
                    </form>
                    
                </div>
                </div>
            <!-- Por Sistema Operativo (Cancelado) -->
                <!-- <div class="busqueda">
                    
                    <label for="bSO">
                        <i class="fa-solid fa-magnifying-glass" style="color: #5deeca;"></i>
                    SO</label>
                    
                </div>
                
                <input type="checkbox" name="check1" id="bSO">
                <div class="prSO">
                    <div class="foro">
                    <form action="?ctrl=CtrlPCs&accion=fSO" method="post">
                        <input type="text" name="prmtrSO"  class="form" placeholder="Escriba el SO">
                        <input type="submit" value="enviar">
                    </form>
                </div>
                </div> -->

                <div class="busqueda">
                    
                    <label for="chEstado" class="pointer">
                        <i class="fa-solid fa-magnifying-glass" style="color: #5deeca;"></i>
                    Estado</label>
                    
                </div>
                <!-- Por patrimonio -->
                <input type="radio" name="check1" id="chEstado">
                <div class="prEstado">
                    <div class="foro">
                    <form action="?ctrl=CtrlPCs&accion=fEstado" method="post">
                        <input type="text" name="prmtrEstado"  class="form" placeholder="Estado">
                        <input type="submit" value="enviar" class="btn-filtro">
                    </form>
                </div>
                </div>

        </div>
      
                <div class="interior">

                    <table class="tabla-pc1">
                        <tr>
                            <th>Id</th>
                            <th>PCs</th>
                            <th>Usuario</th>
                            <th>Codigo Patrimonial</th>
                            
                            
                            
                            
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
                            <?=$d['codigoPatrimonial']?>
                        </td>
                    



                        <td id=<?=$estado?>>
                            <?=$d['Estado_Equipo']?>
                        </td>
                    <td class="noColor">
                        <?=$d['caso']?>
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