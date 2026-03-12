<?php
require_once "Admin.php";

$admin = new Admin("Rossy Bautista", "rossy@gmail.com");

echo "<h2>Datos del Administrador</h2>";
echo "Nombre: " . $admin->getNombre() . "<br>";
echo "Correo: " . $admin->getCorreo() . "<br>";
echo "Rol: " . $admin->getRol();
?>