<?php
include_once('../Config/Conexion.php');

class ProveedoresModel
{
    var $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
    }

    function listProveedores()
    {
        $consulta = "SELECT * FROM proveedor";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }
    function listProveedoresById($id)
    {
        $consulta = "SELECT * FROM proveedor WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();
    }

    function createProveedor($id, $nombre_de_proveedor, $producto, $cantidad, $direccion, $telefono, $precio_compra)
    {
        $consulta = "INSERT INTO proveedor (id, nombre_de_proveedor, producto, cantidad, direccion, telefono, precio_compra)
        VALUES ('$id', '$nombre_de_proveedor', '$producto', '$cantidad', '$direccion', '$telefono', '$precio_compra')";

        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function editProveedor($id, $nombre_de_proveedor, $producto, $cantidad, $direccion, $telefono, $precio_compra)
    {
        $consulta = "UPDATE proveedor SET nombre_de_proveedor = '$nombre_de_proveedor', producto = '$producto', cantidad = '$cantidad', direccion = '$direccion', telefono = '$telefono', precio_compra = '$precio_compra' WHERE id = $id ";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;

    }

    public function deleteProveedor($id)
    {
        $consulta = "DELETE FROM proveedor WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }
}
?>