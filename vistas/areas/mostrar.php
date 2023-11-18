<div class="contenido">

    <div class="titulo">
    <h1><?=$titulo?></h1>
    </div>
        <div class="datos">

        <a href="?" class=button>
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>    
            Retornar</a>
            <div class="interior">
               <!-- <div class="filtrado">
                    <a href="?ctrl=CtrlArea&accion=metFiltro">Filtrar</a>
                </div>-->
            <!--<a href="?ctrl=CtrlArea&accion=filtrar">Filtrar</a>-->
            <table class="tabla">
                <tr>
                    <th>ID</th>
                    <th>Oficina</th>
                    <th>Nombre</th>
                    <th class=noColor>
                    <!--Boton
                    <div class="boton-modal">
                        <label for="btn-modal">Abrir modal</label>

                    </div>

                    contenido del modal
                    <input type="checkbox" id="btn-modal">
                    <div class="contenedor-modal">
                        <div class="contenido-modal">
                            -->
                            <a href="?ctrl=CtrlArea&accion=nuevo" class=button id=nuevo>
                            <i class="fa-solid fa-plus" style="color: #000000;"></i>
                            </a>
                            <!-- <div class="btn-cerrar">
                            <label for="btn-modal">Cerrar</label>
                           </div>
                        </div>
                        <label for="btn-modal" class="cerrar-modal"></label>-->
                    </div>
                        

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
                    <?=$d['Nombre_Oficinas']?>
                </td>
                <td>
                    <?=$d['nombre']?>



                </td>
                
                <td class=noColor>
                    

                <a href="?ctrl=CtrlArea&accion=editar&id=<?=$d['id']?>" class=button id=editar>
                <i class="fa-regular fa-pen-to-square" style="color: #0fc5d2;"></i>
                </a>

                    
                <a href="?ctrl=CtrlArea&accion=eliminar&id=<?=$d['id']?>" class=button id=eliminar>
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