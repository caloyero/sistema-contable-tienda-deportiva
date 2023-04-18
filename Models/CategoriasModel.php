<?php
include_once('../Config/Conexion.php');

class CategoriasModel
{
    var $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function listCategorias()
    {
        $consulta = "SELECT * FROM categorias";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function listCategoriasById($id)
    {
        $consulta = "SELECT * FROM categorias WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();
    }



    public function createCategorias($id, $nombre)
    {
        $consulta = "INSERT INTO categorias(id,nombre) VALUES('$id','$nombre')";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }


    public function editCategorias($id, $nombre)
    {
        $consulta = "UPDATE categorias SET id = '$id', nombre = '$nombre'";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function deleteCategorias($id)
    {
        $consulta = "DELETE FROM categorias WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }
}
?>