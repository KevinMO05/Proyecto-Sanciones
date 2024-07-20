<?php
include("../controllers/trabajadorController.php");

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Sanciones Realizadas</title>";
echo "<link rel='stylesheet' href='frmConsultarSanciones.css'>"; // Enlace al archivo CSS para estilos
echo "</head>";
echo "<body>";

echo "<h1 class='titulo'>SANCIONES REGISTRADAS</h1>";
echo "<div class='tabla-container'>";
echo "<table class='tabla'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Cod. Trabajador</th>";
echo "<th>Tipo sanción</th>";
echo "<th>Fecha</th>";
echo "<th>Accion</th>";
echo "<th>Dias</th>";
echo "<th>Motivo</th>";
echo "<th>Eliminar</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$sql = listaSanciones(); // Suponiendo que listaClientes() devuelve los datos de la tabla


while ($row = mysqli_fetch_array($sql)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['codTrab'] . "</td>";
    echo "<td>" . $row['tipo_sancion'] . "</td>";
    echo "<td>" . $row['fecha'] . "</td>";
    echo "<td>" . $row['accion'] . "</td>";
    echo "<td>" . $row['dias'] . "</td>";
    echo "<td>" . $row['motivo'] . "</td>";
    echo '<td><button class="btn-eliminar" onclick="location.href=\'../controllers/trabajadorController.php?id=' . $row['id'] . '\'">Eliminar</button></td>';
    echo "</tr>";

  
}

echo "</tbody>";
echo "</table>";
echo "</div>";



echo "</body>";
echo "</html>";
?>
