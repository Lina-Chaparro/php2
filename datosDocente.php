<?php
include 'clases.php';
//require 'clases.php';
$docente = new Docente($_POST['nombre'],$_POST['apellido']);
$docente->set('email', $_POST['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos docente</title>
</head>
<body>
    <h1>Los datos del docente son:</h1>
    <div>
        <?php
        echo $docente->nombreCompleto();
        echo $docente->get("email");
        ?>
    </div>
</body>
</html>