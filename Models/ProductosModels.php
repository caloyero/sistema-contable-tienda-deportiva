<<?php
include_once('../Config/Conexion.php');

class ProductosModels
{
    var $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function listProductos()
    {
        $consulta = "SELECT P.id, P.nombre,P.stock,P.precio_venta,P.precio_compra,P.imagen,C.nombre as categoria,PR.nombre_de_proveedor as proveedor FROM productos as P 
        LEFT JOIN categorias C ON C.id = p.id_categoria
        LEFT JOIN proveedor PR ON PR.id = P.id_proveedor";
        $result = $this->conexion->getConexion()->query($consulta);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function listProductosById($id)
    {
        $consulta = "SELECT P.id, P.nombre,P.stock,P.precio_venta,P.precio_compra,P.imagen,C.nombre as categoria,PR.nombre_de_proveedor as proveedor ,C.id as id_categoria, PR.id as id_proveedor FROM productos as P 
        LEFT JOIN categorias C ON C.id = p.id_categoria
        LEFT JOIN proveedor PR ON PR.id = P.id_proveedor
        WHERE P.id =' $id'";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();
    }

    public function createProducto($id, $nombre, $id_categoria, $stock, $id_proveedor, $precio_venta, $precio_compra, $imagen)
    {
        $consulta = "INSERT INTO productos(id,nombre,id_categoria,stock,id_proveedor,precio_venta,precio_compra,imagen)
        VALUES(NULL,'$nombre','$id_categoria','$stock','$id_proveedor','$precio_venta','$precio_compra','$imagen')";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function editProducto($id, $nombre, $id_categoria, $stock, $id_proveedor, $precio_venta, $precio_compra, $imagen)
    {
        $consulta = "UPDATE productos SET nombre = '$nombre',id_categoria = '$id_categoria',stock = '$stock',id_proveedor = '$id_proveedor',precio_venta = '$precio_venta',precio_compra = '$precio_compra',imagen = '$imagen' WHERE id = '$id' ";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function deleteProducto($id)
    {
        $consulta = "DELETE FROM productos WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }
}
?>