<?php
include("conexion.php");
function insertar($codigo, $apellido, $nombre, $cargo, $area, $fechaIngreso)
{
    global $cn;
    $sql = "INSERT INTO tb_trabajador( codigo,apellidos,nombres,cargo, area, fechaIngreso ) VALUES ('$codigo','$apellido','$nombre','$cargo','$area','$fechaIngreso')";
    if (mysqli_query($cn, $sql)) {
        return "Los datos fueron registrados con exitoll!";
    } else {
        return "ERROR, los datos no registraron???";
    }
}
function getSanciones()
{
    global $cn;
    $sql = "SELECT * FROM tb_sancion";
    return mysqli_query($cn, $sql);
}
function getTrabajador()
{
    global $cn;
    $sql = "SELECT * FROM tb_trabajador";
    return mysqli_query($cn, $sql);
}
function consultarTrabajador($codigo)
{
    global $cn;
    $sql = "SELECT * FROM tb_trabajador WHERE codigo='" . $codigo . "'";
    return mysqli_query($cn, $sql);
}
function registrarSancion($codTra, $tipoSancion, $fecha, $accion, $dias, $motivo)
{
    global $cn;
    $sql = "INSERT INTO tb_sancion( codTrab,tipo_sancion,fecha,accion, dias, motivo ) VALUES ('$codTra','$tipoSancion','$fecha','$accion','$dias','$motivo')";

    $sql2 = "SELECT * FROM tb_sancion ORDER BY id DESC LIMIT 1";

    if (mysqli_query($cn, $sql)) {
            $datos = mysqli_query($cn, $sql2); // Asumo que este es el método correcto para consultar un cliente por DNI
            if ($row = mysqli_fetch_array($datos)) {
                $id = $row['id'];
                return "Sanción Nro. 000" . $id . " registrada correctamente";
            }
            return "Los datos fueron MOSTRAME EL ID de manera correcta";
    } else {
        return "ERROR, No se pudo actualizar los datos";
    }

    
}
function eliminarSancion($id)
{
    global $cn;
    $sql = "DELETE FROM tb_sancion WHERE id='" . $id . "'";
    if (mysqli_query($cn, $sql)) {
        return "El trabajador fue eliminado con Exito!!!";
    } else {
        return "ERROR, El curso NO eliminado";
    }
}

function modificarTrabajador($codigo, $apellido, $nombre, $cargo, $area, $fechaIngreso)
{
    global $cn;
    $sql = "UPDATE tb_trabajador SET codigo='$codigo', apellidos=' $apellido ', nombres=' $nombre ', cargo=' $cargo ' , area='$area', fechaIngreso=' $fechaIngreso ' WHERE codigo='$codigo'";

    if (mysqli_query($cn, $sql)) {
        return "El trabajador fue modificado con Exito!!!";
    } else {
        return "ERROR, El curso NO eliminado";
    }
}
