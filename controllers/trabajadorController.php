<?php
include("../models/trabajadorDAO.php");
if (isset($_POST['btnRegistrarSancion'])) { //Registrar Sancion
    $codTra = $_POST['codigo_sancion'];
    $fecha = $_POST['fecha'];
    $dias = $_POST['dias'];
    $tipoSancion = $_POST['tipo_sancion'];
    $motivo = $_POST['motivo'];
    $accion = $_POST['accion'];

    $tipo_sancionf = htmlspecialchars($tipoSancion);
    $diasf = (int)$dias;
    $m = registrarSancion($codTra, $tipo_sancionf, $fecha, $accion, $diasf, $motivo);
    header("Location: ../index.php?m=$m");
} else if (isset($_GET['id'])) { //Eliminar
    $id = $_GET['id'];
    $m = eliminarSancion($id);
    header("Location: ../index.php?m=$m");
} else if (isset($_POST['btnRegistrar'])) { //Registrar Trabajador
    $codigo = $_POST['codigo'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $area = $_POST['area'];
    $fechaIngreso = $_POST['fechaIngreso'];
    $m = insertar($codigo, $apellido, $nombre, $cargo, $area, $fechaIngreso);
    header("Location: ../index.php?m=$m");
}else if (isset($_POST['btnActualizar'])){
    $codigo = $_POST['codigo'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $area = $_POST['area'];
    $fechaIngreso = $_POST['fechaIngreso'];
    $m = modificarTrabajador($dni, $apellido, $nombre, $cargo, $area, $fechaIngreso);
    header("Location: ../index.php?m=$m");

}
function consultarTra($codigo)
{
    return consultarTrabajador($codigo);
}
function listaSanciones()
{
    return getSanciones();
}
function listaTrabajador()
{
    return getTrabajador();
}
