<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medidas Disciplinarias</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>Medidas Disciplinarias</h1>
        <?php
    if (isset($_GET['m'])) {
        $m = $_GET['m'];
        echo '<script language="javascript"> alert("' . $m . '");</script>';
    }?>
   <a href="views/frmInsertarSancion.php"> Registrar Sanción </a><br>
   <a href="views/frmInsertarTrabajador.php"> Registrar Trabajador </a><br>
   <a href="views/frmconsultarSanciones.php"> Listar Sanciones </a><br>
   <a href="views/frmConsultarTrabajador.php"> Listar Trabajadores</a><br>
    
    
</body>

</html>