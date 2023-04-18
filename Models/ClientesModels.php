<?php
include_once('../Config/Conexion.php');

class ClienteModels
{
    var $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function listCliente()
    {
        $consulta = "SELECT * FROM clientes";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function listClienteById($id)
    {
        $consulta = "SELECT * FROM clientes WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();
    }

    public function createCliente($id, $nombre, $telefono, $direccion, $correo)
    {
        $consulta = "INSERT INTO clientes(id,nombre,telefono,direccion,correo)VALUES(NULL,'$nombre','$telefono','$direccion','$correo')";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function updateCliente($id, $nombre, $telefono, $direccion, $correo)
    {
        $consulta = "UPDATE clientes SET nombre = '$nombre',telefono = '$telefono',direccion = '$direccion',correo = '$correo' WHERE id = '$id' ";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function deleteCliente($id)
    {
        $consulta = "DELETE FROM clientes WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }
}
?>