<div class="contenido">

    <div class="titulo">
    <h1>Areas</h1>
    </div>
        <div class="datos">

            <a href="?" class=button>
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>    
            Retornar</a>
            <div class="interior">
                <!-- <div class="container-fluid">
                    <form class="d-flex">
                        <input type="text" class="form-control me-2 light-table-filter" data-table="table-id" placeholder="Escriba parametro de filtro">
                    </form>
                </div> -->

                <div class="oficina">
                   <a href="?ctrl=CtrlOficina" class="button right">Ver Oficinas</a> 
                </div>
                <a href="?ctrl=CtrlArea&accion=metFiltro" class=button id=metFiltro>
                            Filtro
                            </a>
            <table class="tabla">
                <tr>
                    <th>ID</th>
                    <th>Oficina</th>
                    <th>Nombre</th>
                    <th class=noColor>
                    <!-- Agregar -->
                    
                            <a href="?ctrl=CtrlArea&accion=nuevo" class=button id=nuevo>
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

            <script src="./vistas/areas/busqueda.js"></script>
            </div>
        </div> 

</div>