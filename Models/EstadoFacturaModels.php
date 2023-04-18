<?php
include('../Config/Conexion.php');

class EstadoFacturaModels
{
    var $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function getAllEstado()
    {
        $consulta = "SELECT * FROM estado_de_factura";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getAllEstadoById($id)
    {
        $consulta = "SELECT * FROM estado_de_factura WHERE id = '$id'";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();
    }
}
?>