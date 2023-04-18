<?php
include('..Config/Conexion.php');
class FacturaModels
{
    var $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function listFactura()
    {
        $consulta = "SELECT *FROM facturas";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function listFacturaById($id)
    {
        $consulta = "SELECT *FROM facturas WHERE id = '$id'";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result->fetch_object();
    }

    public function createFactura($id, $codigo, $abono, $valor_pendiente, $id_estado, $total, $fecha_creacion, $fecha_actualizacion, $fecha_pago)
    {
        $consulta = "INSERT INTO facturas (id,codigo,abono,valor_pendiente,id_estado,totalfecha_creacion,fecha_actualizacion,fecha_pago) 
        VALUES(NULL,'$codigo','$abono','$valor_pendiente','$id_estado','$total','$fecha_creacion','$fecha_actualizacion','$fecha_pago')";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }

    public function updateFactura($id, $abono, $valor_pendiente, $id_estado, $fecha_actualizacion, $fecha_pago)
    {
        $consulta = " UPDATE facturas SET abono ='$abono',valor_pendiente = '$valor_pendiente',id_estado = '$id_estado',fecha_actualizacion='$fecha_actualizacion',fecha_pago= '$fecha_pago' WHERE id = $id";
        $result = $this->conexion->getConexion()->query($consulta);
        return $result;
    }
}
?>