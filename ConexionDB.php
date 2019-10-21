<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "db_csp");
// Check connection
if ($conn->connect_error) {
    die("conexion fallida: " . $conn->connect_error);
}
//echo "conexion realizada";
?>