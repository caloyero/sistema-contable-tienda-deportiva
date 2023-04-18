<?php
include_once('../Config/Conexion.php');

class DetalleFacturaModels
{
    var $conexion;
    public function __construct()
    {
        $this->conexion = new Conexion();

    }
    public function createDetalleFactura($id, $id_factura, $id_ventas)
    {
        $consulta = "INSERT INTO detalle_factura (id,Id_factura,id_ventas)VALUES(NULL,$id_factura,$id_ventas)";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }
}
?>