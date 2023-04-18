<?php
include('../Models/EstadoFacturaModels.php');

class EstadoFacturaController
{
    var $modelo;

    public function __construct()
    {
        $this->modelo = new EstadoFacturaModels();
    }

    public function listarEstado()
    {
        $result = $this->modelo->getAllEstado();
        return $result;
    }
    public function listarEstadoById($id)
    {
        $result = $this->modelo->getAllEstadoById($id);
        return $result;
    }
}
?>