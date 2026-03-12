<?php
require_once 'clases/Usuario.php';
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

try {
    $usuario1 = new Usuario("Rossy Bautista", "rossy@gmail.com");
    echo "Datos del Usuario:<br>";
    echo "Nombre: " . $usuario1->getNombre() . "<br>";
    echo "Correo: " . $usuario1->getCorreo() . "<br>";
    echo "Rol: " . $usuario1->getRol() . "<br><br>";

    $admin1 = new Admin("Admin Uno", "admin@correo.com");
    echo "Datos del Administrador:<br>";
    echo "Nombre: " . $admin1->getNombre() . "<br>";
    echo "Correo: " . $admin1->getCorreo() . "<br>";
    echo "Rol: " . $admin1->getRol() . "<br><br>";

    $alumno1 = new Alumno("Sofia Garcia", "sofia@gmail.com", "20885229");
    echo "Datos del Alumno:<br>";
    echo "Nombre: " . $alumno1->getNombre() . "<br>";
    echo "Correo: " . $alumno1->getCorreo() . "<br>";
    echo "Rol: " . $alumno1->getRol() . "<br>";
    echo "Matricula: " . $alumno1->getMatricula() . "<br><br>";

    $usuario2 = new Usuario("Usuario Mal", "correo-invalido");

} catch (Exception $e) {
    echo "<b>Error:</b> " . $e->getMessage() . "<br>";
}
?>