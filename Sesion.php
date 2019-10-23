<?php include("ConexionDB.php");

@$clave = $_POST["password"];
@$login = $_POST["user"];
$sql = "SELECT * from usuario where login='$login' and clave ='$clave'";
$result = mysqli_query($conn, $sql);
$registro = mysqli_fetch_array($result);
if (!$registro[0]) { ?>
    <script lenguage=javascript>
        alert("Usuario incorrecto");
        window.location = "index.php";
    </script>
<?php } else {
    $_SESSION["id_user"] = $registro["login"];
    $_SESSION["id_nombre"] = $registro["nombre"];
    header("Location:Main-Menu.php");
}
?>