<?php
include('../Models/VentasModels.php');

class VentasController
{
    var $modelo;

    function __construct()
    {
        $this->modelo = new VentasModel();
    }

    public function ListarVentas()
    {
        $result = $this->modelo->listVentas();
        return $result;
    }
    public function ListarVentasById($id)
    {
        $result = $this->modelo->listVentasById($id);
        return $result;
    }

    public function listarVentasByIdCliente($id)
    {
        $result = $this->listarVentasByIdCliente($id);
        return $result;
    }

    public function crearVenta($id, $id_producto, $id_cliente, $unidades, $precio_unidad, $total)
    {
        $result = $this->modelo->createVenta($id, $id_producto, $id_cliente, $unidades, $precio_unidad, $total);
        return $result;
    }

    public function actualizarVenta($id, $id_producto, $id_cliente, $unidades, $precio_unidad, $total)
    {
        $result = $this->modelo->updateVenta($id, $id_producto, $id_cliente, $unidades, $precio_unidad, $total);
        return $result;
    }

    public function borrarVenta($id)
    {
        $result = $this->modelo->deleteVenta($id);
        return $result;
    }
}
?>