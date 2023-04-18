<?php
include('../Models/ProductosModelS.php');

class ProductosController
{
    var $modelo;

    public function __construct()
    {
        $this->modelo = new ProductosModels();

    }

    public function listarProductos()
    {
        $result = $this->modelo->listProductos();
        return $result;
    }

    public function listarProductosById($id)
    {
        $result = $this->modelo->listProductosById($id);
        return $result;
    }

    public function crearProducto($id, $nombre, $id_categoria, $stock, $id_proveedor, $precio_venta, $precio_compra, $imagen)
    {
        $result = $this->modelo->createProducto($id, $nombre, $id_categoria, $stock, $id_proveedor, $precio_venta, $precio_compra, $imagen);
        return $result;
    }

    public function editarProducto($id, $nombre, $id_categoria, $stock, $id_proveedor, $precio_venta, $precio_compra, $imagen)
    {
        $result = $this->modelo->editProducto($id, $nombre, $id_categoria, $stock, $id_proveedor, $precio_venta, $precio_compra, $imagen);
        return $result;
    }

    public function borrarProductos($id)
    {
        $result = $this->modelo->deleteProducto($id);
        return $result;
    }
}
?>