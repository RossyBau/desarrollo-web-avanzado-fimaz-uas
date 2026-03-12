<?php

require_once "clases/Usuario.php";
require_once "clases/Admin.php";
require_once "clases/Alumno.php";

$usuarios = [];
$error = "";

try {
    $admin = new Admin("Margarita Bustamante", "Margarita@gmail.com");
    $usuarios[] = $admin;

    $alumno = new Alumno("Sofia Garcia", "sofia@gmail.com", "20885229");
    $usuarios[] = $alumno;

    $alumnoError = new Alumno("Elizabeth Duran", "correo invalido", "20557649");
    $usuarios[] = $alumnoError;

} catch (Exception $e) {

$error = $e->getMessage();
}

?>

<!Doctype html>
<html>
<head>
<title>Sistema de usuarios</title>
</head>
<body>
 <h2>Lista de Usuarios</h2>
<table border="1">
<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matricula</th>
</tr>

<?php foreach ($usuarios as $u) { ?>

<tr>
<td><?php echo $u->getNombre(); ?></td>
<td><?php echo $u->getCorreo(); ?></td>
<td><?php echo $u->getRol(); ?></td>
<td>
<?php 
if ($u instanceof Alumno) {
    echo $u->getMatricula();
} else {
    echo "-";
}
?>
</td>
</tr>

<?php } ?>

</table>

<?php
if ($error != "") {
    echo "<p style='color:red;'>Error: $error</p>";
}
?>

</body>
</html>