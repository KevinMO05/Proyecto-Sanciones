<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar trabajador</title>
    <link rel="stylesheet" href="frmInsertar.css">
</head>

<body>
    <h1>Registrar trabajador</h1>
    <form method="post" action="../controllers/trabajadorController.php">
        Codigo: <input type="text" name="codigo" />
        Apellidos: <input type="text" name="apellido" />
        Nombres : <input type="text" name="nombre" />
        Cargo: <input type="text" name="cargo" />
        Área: <input type="text" name="area" />
        Fecha de Ingeso: <input type="date" name="fechaIngreso" />
        <input type="submit" name="btnRegistrar" value="Registrar trabajador" />
    </form>
</body>

</html>