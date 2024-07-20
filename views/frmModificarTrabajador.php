<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Trabajador</title>
    <link rel="stylesheet" href="frmModificarTrabajador.css">
</head>

<body>
    <h1>Modificar Trabajador</h1>

    <?php
    include("../controllers/trabajadorController.php");
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        $datos = consultarTra($codigo); // Asumo que este es el método correcto para consultar un cliente por DNI
        if ($row = mysqli_fetch_array($datos)) {
            $codigo = $row['codigo'];
            $apellido = $row['apellidos'];
            $nombre = $row['nombres'];
            $cargo = $row['cargo'];
            $area = $row['area'];
            $fechaIngreso = $row['fechaIngreso'];
    ?>

            <form method='post' action='../controllers/trabajadorController.php'>
                <label for="codigo">Codigo</label>
                <input type="text" id="codigo" name="codigo" required value="<?php echo htmlspecialchars($codigo); ?>">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($apellido); ?>">
                <label for="nombres">Nombres</label>
                <input type="text" id="nombres" name="nombres" value="<?php echo htmlspecialchars($nombre); ?>">
                <label for="cargo">Cargo</label>
                <input type="text" id="cargo" name="cargo" value="<?php echo htmlspecialchars($cargo); ?>">
                <label for="area">Área</label>
                <input type="text" id="area" name="area" value="<?php echo htmlspecialchars($area); ?>">
                <label for="fecha-ingreso">Fecha de Ingreso</label>
                <input type="date" id="fecha-ingreso" name="fecha_ingreso" value="<?php echo htmlspecialchars($fechaIngreso); ?>">
                <input type='submit' name='btnActualizar' value='Actualizar Trabajador'/>
            </form>

    <?php
        } else {
            echo "No se encontraron datos para el cliente con DNI: " . $dniC;
        }
    } else {
        echo "No se proporcionó el DNI del cliente a modificar.";
    }
    ?>
</body>

</html>