<?php
include('../Models/FacturaModels.php');

class FacturaController
{
    var $modelo;

    public function __construct()
    {
        $this->modelo = new FacturaModels();
    }

    public function listarFactura()
    {
        $result = $this->modelo->listFactura();
        return $result;
    }
    public function listarFacturaById($id)
    {
        $result = $this->modelo->listFacturaById($id);
        return $result;
    }

    public function crearFactura($id, $codigo, $abono, $valor_pendiente, $id_estado, $total, $fecha_creacion, $fecha_actualizacion, $fecha_pago)
    {
        $result = $this->modelo->createFactura($id, $codigo, $abono, $valor_pendiente, $id_estado, $total, $fecha_creacion, $fecha_actualizacion, $fecha_pago);
        return $result;
    }

    public function actualizarFactura($id, $abono, $valor_pendiente, $id_estado, $fecha_actualizacion, $fecha_pago)
    {
        $result = $this->modelo->updateFactura($id, $abono, $valor_pendiente, $id_estado, $fecha_actualizacion, $fecha_pago);
        return $result;
    }
}
?>