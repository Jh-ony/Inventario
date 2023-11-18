<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <title>Inicio de sesión</title>
</head>

<body>
   <img class="wave" src="img/wave.png">
   <div class="container">
      <div class="img">
         <img src="img/bg.svg">
      </div>
      <div class="login-content">
         <form method="post" action="">
            <img src="img/imagen1.jpg">
            <h2 class="title">BIENVENIDO</h2>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input id="usuario" type="text" class="input" name="usuario">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>

            <div class="text-center">
               <a class="font-italic isai5" href="">Olvidé mi contraseña</a>
               <a class="font-italic isai5" href="">Registrarse</a>
            </div>
            
            <input name="btningresar" class="btn" type="submit" value="INICIAR SESION"> 
          <!--  <a  class= "btn" href="../index.php">INICIAR SESION</a>-->
          
         </form>
      </div>
   </div>
   <script src="js/fontawesome.js"></script>
   <script src="js/main.js"></script>
   <script src="js/main2.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.bundle.js"></script>

</body>

</html>



<?php
/*
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$_SESSION['password']=$clave;
$conn=mysqli_connect("locahost:3307", "root", "", "bdtecno") ;
$consulta="SELECT * FROM personas WHERE usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conn);
$filas= mysqli_num_rows($resultado);
if ($filas)
 {
    header("localtion:index.php");
}
else{
    ?>
*/
$servername = "localhost:3306";
    $username = "username";
    $password = "password";
    $dbname = "bdtecno";

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar conexión
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


// Escapar las variables de entrada
$usuario = mysqli_real_escape_string($conn, $_POST['user']);
$password = mysqli_real_escape_string($conn, $_POST['pass']);

// Realizar consulta
$sql = "SELECT * FROM personas WHERE usuario = '$usuario' AND password = '$password'";
$result = mysqli_query($conn, $sql);

// Verificar si el usuario y la contraseña son correctos
if (mysqli_num_rows($result) > 0) {
   // El inicio de sesión es exitoso, ahora puede redirigir al usuario a la página de inicio
   header("location:../index.php");
} else {
   // La contraseña y el nombre de usuario son incorrectos, mostrar un mensaje de error
   echo "Error: La contraseña y el nombre de usuario son incorrectos.";
}

?>


<?php
//como realizo una verificacion a la base de datos para un login?
/*
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar conexión
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Escapar las variables de entrada
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    // Realizar consulta
    $sql = "SELECT * FROM Users WHERE Username = '$user' AND Password = '$pass'";
    $result = mysqli_query($conn, $sql);

    // Verificar si el usuario y la contraseña son correctos
    if (mysqli_num_rows($result) > 0) {
        // El inicio de sesión es exitoso, ahora puede redirigir al usuario a la página de inicio
        header("location: welcome.php");
    } else {
        // La contraseña y el nombre de usuario son incorrectos, mostrar un mensaje de error
        echo "Error: La contraseña y el nombre de usuario son incorrectos.";
    }

    // Cerrar conexión
    mysqli_close($conn);
    */
?>