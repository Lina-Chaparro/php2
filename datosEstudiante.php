<?php
include 'clases.php';
//require 'clases.php';
$estudiante=new Estudiante();
$estudiante->set('nombre', $_POST['nombre']);
$estudiante->set('apellido', $_POST['apellido']);
$estudiante->set('email', $_POST['email']);
$estudiante->set('edad', $_POST['edad']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Estudiante</title>
    <link rel="stylesheet" href="est.css">
</head>
<body>
    <h1>Los datos del estudiante son:</h1>
    <div>
        <?php
        echo "Nombre completo: ";
        echo $estudiante->get("nombre")." ";
        echo $estudiante->get("apellido").'<br>';
        echo "Email: ";
        echo $estudiante->get("email").'<br>';
        echo "Edad: ";
        echo $estudiante->get("edad").'<br>';
        echo "Así que: ";
        echo $estudiante->AnalisisEdad($estudiante->get("edad"));
        ?>
    </div>
</body>
</html>