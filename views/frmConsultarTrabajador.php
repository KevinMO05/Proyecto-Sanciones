<?php
include("../controllers/trabajadorController.php");

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Sanciones Realizadas</title>";
echo "<link rel='stylesheet' href='frmConsultarTrabajador.css'>"; // Enlace al archivo CSS para estilos
echo "</head>";
echo "<body>";

echo "<h1 class='titulo'>TRABAJADORES REGISTRADAS</h1>";
echo "<div class='tabla-container'>";
echo "<table class='tabla'>";
echo "<thead>";
echo "<tr>";
echo "<th>Codigo</th>";
echo "<th>Apellidos</th>";
echo "<th>Nombres</th>";
echo "<th>Cargo</th>";
echo "<th>Área</th>";
echo "<th>Fecha de Ingreso</th>";
echo "<th>Modificar</th>";
echo "<th>Eliminar</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$sql = listaTrabajador(); // Suponiendo que listaClientes() devuelve los datos de la tabla


while ($row = mysqli_fetch_array($sql)) {
    echo "<tr>";
    echo "<td>" . $row['codigo'] . "</td>";
    echo "<td>" . $row['apellidos'] . "</td>";
    echo "<td>" . $row['nombres'] . "</td>";
    echo "<td>" . $row['cargo'] . "</td>";
    echo "<td>" . $row['area'] . "</td>";
    echo "<td>" . $row['fechaIngreso'] . "</td>";
    echo '<td><button class="btn-modificar" onclick="location.href=\'frmModificarTrabajador.php?codigo=' . $row['codigo'] . '\'">Modificar</button></td>';
    echo '<td><button class="btn-eliminar" onclick="location.href=\'../controllers/trabajadorController.php?codigo=' . $row['codigo'] . '\'">Eliminar</button></td>';
    echo "</tr>";

  
}

echo "</tbody>";
echo "</table>";
echo "</div>";



echo "</body>";
echo "</html>";
?>
