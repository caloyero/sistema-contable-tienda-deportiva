<?php
include('../Models/ProveedoresModel.php');

class ProveedoresController
{
    var $model;

    function __construct()
    {
        $this->model = new ProveedoresModel();
    }

    function listarProveedores()
    {
        $result = $this->model->listProveedores();
        return $result;
    }
    function listarProveedoresById($id)
    {
        $result = $this->model->listProveedoresById($id);
        return $result;
    }

    function crearProveedor($id, $nombre_de_proveedor, $producto, $cantidad, $direccion, $telefono, $precio_compra)
    {
        $this->model->createProveedor($id, $nombre_de_proveedor, $producto, $cantidad, $direccion, $telefono, $precio_compra);
    }

    public function actualizarProveedor($id, $nombre_de_proveedor, $producto, $cantidad, $direccion, $telefono, $precio_compra)
    {
        $result = $this->model->editProveedor($id, $nombre_de_proveedor, $producto, $cantidad, $direccion, $telefono, $precio_compra);
        return $result;
    }

    public function borrarProveedor($id)
    {
        $result = $this->model->deleteProveedor($id);
        return $result;
    }
}
?>