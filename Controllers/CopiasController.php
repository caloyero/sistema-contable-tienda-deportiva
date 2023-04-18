<?php
//include_once('../Models/CopiasModels.php');
include('../Models/CopiasModels.php');

class CopiasController
{
    var $modelo;

    public function __construct()
    {
        $this->modelo = new CopiasModels();
    }

    public function showListCipiasBlancoYNegro()
    {
        $result = $this->modelo->listarCopiasBlacoYNegro();
        if (empty($result)) {
            echo '<p>no hay datos</p>';
        } else {
            return $result;
        }
    }
    public function showCopiasBYNById($id)
    {
        $result = $this->modelo->listarCopiasBYNById($id);
        return $result;
    }

    public function crearCopiaBlacoYNegro($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha)
    {
        $result = $this->modelo->createCopiaBlancoYNegro($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha);
        return $result;
    }

    public function eliminarCopiaBlacoYNegro($id)
    {
        $result = $this->modelo->deleteCopiaBlancoYNegro($id);
        return $result;
    }

    public function actualizarCopiaBlancoYNegro($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha)
    {
        $result = $this->modelo->updateCopiaBlancoYNegro($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha);
        return $result;

    }

    /* copias a color */


    public function showListCopiasColor()
    {
        $result = $this->modelo->listarCopiasColor();
        if (empty($result)) {
            echo '<p>no hay datos</p>';
        } else {
            return $result;
        }
    }
    public function showCopiasColorById($id)
    {
        $result = $this->modelo->listarCopiasColorById($id);
        return $result;
    }

    public function crearCopiaColor($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha)
    {
        $result = $this->modelo->createCopiaColor($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha);
        return $result;
    }

    public function eliminarCopiaColor($id)
    {
        $result = $this->modelo->deleteCopiaColor($id);
        return $result;
    }

    public function actualizarCopiaColor($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha)
    {
        $result = $this->modelo->updateCopiaColor($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha);
        return $result;
    }
}
?>