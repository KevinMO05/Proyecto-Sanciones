<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Sanción</title>
    <link rel="stylesheet" href="frmInsertarSancion.css">
</head>

<body>
    <div class="container">
        <header>
            <button class="close-button" onclick="window.location.href = '../index.php'">X</button>
            <h1>Registrar Sanción</h1>
        </header>
        <?php
        include("../controllers/trabajadorController.php");
        $codigo = "";
        $apellido = "";
        $nombre = "";
        $cargo = "";
        $area = "";
        $fecha_ingreso = "";
        if (isset($_POST['btnBuscar'])) {
            $codigo = $_POST['codigo'];
            $sql = consultarTra($codigo);
            if ($row = mysqli_fetch_array($sql)) {
                $apellido = $row['apellidos'];
                $nombre = $row['nombres'];
                $cargo = $row['cargo'];
                $area = $row['area'];
                $fecha_ingreso = $row['fechaIngreso'];
            } else {
                $apellido = $nombre = $cargo = $area = $fecha_ingreso = "";
                echo "<p>No se encontraron datos para el código proporcionado.</p>";
            }
        }
        ?>
        <section class="form-section">
            <h2>Datos de trabajador</h2>
            <form method="POST" action="frmInsertarSancion.php">
                <div class="form-group">
                    <div class="input-with-icon">
                        <label for="codigo">Codigo</label>
                        <input type="text" id="codigo" name="codigo" required value="<?php echo htmlspecialchars($codigo); ?>">
                        <button type="submit" class="search-button" name="btnBuscar">&#128269;</button>
                    </div>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($apellido); ?>">
                    <label for="nombres">Nombres</label>
                    <input type="text" id="nombres" name="nombres" value="<?php echo htmlspecialchars($nombre); ?>">
                    <label for="cargo">Cargo</label>
                    <input type="text" id="cargo" name="cargo" value="<?php echo htmlspecialchars($cargo); ?>">
                    <label for="area">Área</label>
                    <input type="text" id="area" name="area" value="<?php echo htmlspecialchars($area); ?>">
                    <label for="fecha-ingreso">Fecha de Ingreso</label>
                    <input type="date" id="fecha-ingreso" name="fecha_ingreso" value="<?php echo htmlspecialchars($fecha_ingreso); ?>">
                </div>
            </form>
        </section>

        <section class="form-section">
            <h2>Datos de sanción</h2>
            <form method="POST" action="" >
                <div class="form-group">
                    <input type="hidden" id="codigo_sancion" name="codigo_sancion" value="<?php echo htmlspecialchars($codigo); ?>">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" required>
                    <label for="dias">Días</label>
                    <input type="number" id="dias" name="dias" required>
                    <label for="tipo-sancion">Tipo de sanción</label>
                    <select id="tipo-sancion" name="tipo_sancion" required>
                        <option value="">Selecciona el tipo de sanción</option>
                        <option value="Amonestacion">Amonestación</option>
                        <option value="Suspension">Suspensión</option>
                        <option value="Cese_por_despido">Cese por despido</option>
                    </select>
                    <label for="motivo">Motivo</label>
                    <input type="text" id="motivo" name="motivo" required>
                    <label for="accion">Acción</label>
                    <input type="text" id="accion" name="accion" required>
                </div>
                <button type="submit" class="register-button" name="btnRegistrarSancion">Registrar Sanción</button>
            </form>
        </section>
    </div>
</body>

</html>
