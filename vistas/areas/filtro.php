<form action="?ctrl=CtrlArea&accion=filtrar" method="post">

    Filtrar Oficina



     <select class="form" name="idOficina">
                <?php
                if (is_array($oficinas))
                foreach ($oficinas as $o) {
                    
                    $select=($idOficina==$o['id'])?'selected':'';
                ?>
                <option <?=$select?> value="<?=$o['id']?>">
                    <?=$o['nombre']?>
                </option>
                <?php } ?>
            </select> 

            <input type="submit" value="Filtrar">
</form>

            <a href="?ctrl=CtrlArea" > 
            <i class="fa-solid fa-angles-left" style="color: #253e6a;"></i>     
            Retornar</a>

            