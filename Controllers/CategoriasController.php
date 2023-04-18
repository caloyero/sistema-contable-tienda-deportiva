<?php
include('../Models/CategoriasModel.php');

class CategoriasController
{
    public $modelo;

    function __construct()
    {
        $this->modelo = new CategoriasModel();
    }

    public function listarCategorias()
    {
        $result = $this->modelo->listCategorias();
        return $result;
    }

    public function listarCategoriasById($id)
    {
        $result = $this->modelo->listCategoriasById($id);
        return $result;
    }

    public function crearCategoria($id, $nombre)
    {
        $result = $this->modelo->createCategorias($id, $nombre);
        return $result;
    }

    public function actualizarCategorias($id, $nombre)
    {
        $result = $this->modelo->editCategorias($id, $nombre);
        return $result;
    }

    public function borraCategorias($id)
    {
        $result = $this->modelo->deleteCategorias($id);
        return $result;

    }
}
?>