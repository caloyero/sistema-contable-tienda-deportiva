<<?php
include('../Config/Conexion.php');

class CopiasModels
{
    var $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();

    }

    public function getCopiasColor()
    {
        return $this->conexion->getConexion();
    }

    public function listarCopiasBlacoYNegro()
    {
        $consulta = "SELECT * FROM copias_a_blancoynegro ";

        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function listarCopiasBYNById($id)
    {
        $consulta = "SELECT * FROM copias_a_blancoynegro WHERE id = $id ";

        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();
    }

    public function createCopiaBlancoYNegro($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha)
    {
        $consulta = "INSERT INTO copias_a_blancoynegro(id, precio, impreciones, acomulado_hojas, total, cliente, fecha) 
        VALUES (NULL,'$precio','$impreciones','$acomulado_hojas','$total','$cliente', '$fecha')";

        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function deleteCopiaBlancoYNegro($id)
    {
        $consulta = "DELETE FROM copias_a_blancoynegro WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function updateCopiaBlancoYNegro($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha)
    {
        $consulta = "UPDATE copias_a_blancoynegro SET precio='$precio',impreciones='$impreciones',acomulado_hojas='$acomulado_hojas',total=' $total',cliente='$cliente',fecha='$fecha' WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }
    /* copias a color */

    public function listarCopiasColor()
    {
        $consulta = "SELECT * FROM copias_a_color ";

        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function listarCopiasColorById($id)
    {
        $consulta = "SELECT * FROM copias_a_color WHERE id = $id ";

        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();
    }

    public function createCopiaColor($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha)
    {
        $consulta = "INSERT INTO copias_a_color(id, precio, impreciones, acomulado_hojas, total, cliente, fecha) 
        VALUES (NULL,'$precio','$impreciones','$acomulado_hojas','$total','$cliente', '$fecha')";

        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function deleteCopiaColor($id)
    {
        $consulta = "DELETE FROM copias_a_color WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function updateCopiaColor($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha)
    {
        $consulta = "UPDATE copias_a_color SET precio='$precio',impreciones='$impreciones',acomulado_hojas='$acomulado_hojas',total=' $total',cliente='$cliente',fecha='$fecha' WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }
}
?>