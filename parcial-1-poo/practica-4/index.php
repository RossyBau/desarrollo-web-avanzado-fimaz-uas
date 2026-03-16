<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

$usuarios = [];

try {

    $admin = new Admin("Eloise Castro", "admin@email.com");
    $usuarios[] = $admin;

    $alumno = new Alumno("Eduardo Torres", "eduardo@email.com", "20557964");
    $usuarios[] = $alumno;

    $invitado = new Invitado("Sofia Ruiz", "sofia@corporativosrs.com", "SRS");
    $usuarios[] = $invitado;

    $error = new Alumno("Error Usuario", "correo-invalido", "0000");
    $usuarios[] = $error;

} catch (Exception $e) {

    echo "Error controlado: " . $e->getMessage();

}

?>

<!doctype html>
<html>
<head>
<title>Lista de Usuarios</title>
</head>

<body>

<h2>Usuarios registrados</h2>

<table border="1">

<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matrícula</th>
<th>Empresa</th>
</tr>

<?php foreach($usuarios as $u): ?>

<tr>

<td><?php echo $u->getNombre(); ?></td>
<td><?php echo $u->getCorreo(); ?></td>
<td><?php echo $u->getRol(); ?></td>

<td>
<?php
if($u instanceof Alumno){
echo $u->getMatricula();
}else{
echo "—";
}
?>
</td>

<td>
<?php
if($u instanceof Invitado){
echo $u->getEmpresa();
}else{
echo "—";
}
?>
</td>

</tr>

<?php endforeach; ?>

</table>

</body>
</html>