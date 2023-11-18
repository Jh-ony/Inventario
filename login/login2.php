<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "bdtecno";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
 font-family: Arial, Helvetica, sans-serif;
}

.container {
 width: 300px;
 padding: 16px;
 background-color: white;
 margin: 0 auto;
 margin-top: 100px;
 border: 1px solid black;
 border-radius: 4px;
}

input[type=text], input[type=password] {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
}

button {
 background-color: #4CAF50;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
}

button:hover {
 opacity: 0.8;
}
</style>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 <div class="container">
    <label for="uname"><b>Usuario</b></label>
    <input type="text" placeholder="Ingrese Usuario" name="usuario" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Ingrese Contraseña" name="password" required>

    <button type="submit">Iniciar sesión</button>
 </div>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Obtener el valor de las variables
 $usuario = $_POST["usuario"];
 $password = $_POST["password"];

 // Comprobar si el usuario existe en la base de datos
 $sql = "SELECT id FROM personas WHERE usuario = ? and password = ?";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("ss", $usuario, $password);
 $stmt->execute();
 $result = $stmt->get_result();
 $count = $result->num_rows;

 // Si el usuario existe, iniciar sesión
 if ($count == 1) {
 session_start();
 $_SESSION["login_user"] = $usuario;
 header("location: ../index.php");
 } else {
 $error = "Usuario o Contraseña incorrectos.";
 }

 $stmt->close();
 $conn->close();
}
?>
