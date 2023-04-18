<?php
include('../Models/ClientesModels.php');

class ClientesController
{
    var $modelo;

    public function __construct()
    {
        $this->modelo = new ClienteModels();
    }

    public function listarClientes()
    {
        $result = $this->modelo->listCliente();
        return $result;
    }
    public function listarClienteById($id)
    {
        $result = $this->modelo->listClienteById($id);
        return $result;
    }

    public function crearCliente($id, $nombre, $telefono, $direccion, $correo)
    {
        $result = $this->modelo->createCliente($id, $nombre, $telefono, $direccion, $correo);
        return $result;
    }

    public function editarCliente($id, $nombre, $telefono, $direccion, $correo)
    {
        $result = $this->modelo->updateCliente($id, $nombre, $telefono, $direccion, $correo);
        return $result;
    }

    public function borrarCliente($id)
    {
        $result = $this->modelo->deleteCliente($id);
        return $result;
    }
}
?>