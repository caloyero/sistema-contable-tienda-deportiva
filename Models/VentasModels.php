<?php
include_once('../Config/Conexion.php');
class VentasModel
{
    var $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function listVentas()
    {
        $consulta = "SELECT V.id,P.nombre as producto,C.nombre as cliente,V.unidades,P.precio_venta as precio_unidad,P.precio_venta*V.unidades as total 
        FROM venta_de_ropa as V 
        LEFT JOIN productos P ON P.id = V.id_producto
        LEFT JOIN clientes C ON C.id = V.id_cliente ORDER BY V.id_cliente";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;

    }
    public function listVentasById($id)
    {
        $consulta = "SELECT V.id,P.nombre as producto,C.nombre as cliente,V.unidades,P.precio_venta as precio_unidad,P.precio_venta*V.unidades as total,P.id as id_producto,C.id as id_cliente
        FROM venta_de_ropa as V 
        LEFT JOIN productos P ON P.id = V.id_producto
        LEFT JOIN clientes C ON C.id = V.id_cliente WHERE V.id = '$id'";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();

    }

    public function listVentasByIdCliente($id)
    {
        $consulta = "SELECT V.id,P.nombre as producto,C.nombre as cliente,V.unidades,P.precio_venta as precio_unidad,P.precio_venta*V.unidades as total,
        FROM venta_de_ropa as V 
        LEFT JOIN productos P ON P.id = V.id_producto
        LEFT JOIN clientes C ON C.id = V.id_cliente WHERE C.id = '$id'";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();
    }

    public function createVenta($id, $id_producto, $id_cliente, $unidades, $precio_unidad, $total)
    {
        $consulta = "INSERT INTO venta_de_ropa(id,id_producto,id_cliente,unidades,precio_unidad,total)
        VALUES(NULL,'$id_producto','$id_cliente','$unidades','$precio_unidad','$total')";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function updateVenta($id, $id_producto, $id_cliente, $unidades, $precio_unidad, $total)
    {
        $consulta = "UPDATE venta_de_ropa SET id_producto ='$id_producto',id_cliente ='$id_cliente',unidades ='$unidades',precio_unidad ='$precio_unidad',total ='$total' WHERE id = '$id'";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function deleteVenta($id)
    {
        $consulta = "DELETE FROM venta_de_ropa WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }


}
?>