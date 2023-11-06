<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema IES JCM</title>
    <link rel="stylesheet" href="./css/disenyo.css">
    <!-- Google Font: Source Sans Pro -->
  <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./assets/css/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  
    
</head>
<body class="gridContainer">
   <header class=logo>
    <?php
        require_once './vistas/plantilla/logo.php';
    ?>
   </header>
        <?php 
        # require_once './vistas/plantilla/preloader.php';
            ?>
            <header class=otro>
                <div class="cabeza">
                <?php
                require_once './vistas/plantilla/nav.php';
                ?>
                </div>
            </header>

            <header class=header>
                <?php
                require_once './vistas/plantilla/encabezado.php';

                ?>
            </header>
        <aside class=sidebar>
        <!--<button class=inventario></button>-->

            <div class="scroll-space">


                <?php
                require_once './vistas/plantilla/aside.php';
                ?>
                </div>
            </div>
        </aside>

        
        
        <article class=main>
                <?php 
                //require_once './vistas/plantilla/encabezado.php';
                ?>
            
            <!-- Main content -->
            <section class="content">
                <div>
                    <?=$contenido?>
                </div>
            </section>
        </article>


        <footer class=footer>
        <?php 
            require_once './vistas/plantilla/footer.php';
            ?>
        </footer>
</body>
</html>