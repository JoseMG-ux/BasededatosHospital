<?php
session_start();

if (!$_SESSION) { ?>

    <script lenguage=javascript>
        alert("No ha iniciado Sesion");
        window.location = "index.php";
    </script>
<?php
}
$nombreuser = $_SESSION["id_nombre"];
?>

