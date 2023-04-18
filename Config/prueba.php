<?php
include('../Models/CopiasModels.php');
$prueba = new CopiasModels();

$r = $prueba->getCopiasColor();

echo '<p>ddddd</p>';
print_r($r);

// Obtener datos del formulario
$fecha = $_POST['fecha'];
$cliente = $_POST['cliente'];
$productos = $_POST['productos'];

// Insertar datos de la factura en la tabla "factura"
$sql = "INSERT INTO factura (fecha, cliente) VALUES ('$fecha', '$cliente')";
$resultado = mysqli_query($conexion, $sql);

// Obtener el id generado automáticamente para la factura
$factura_id = mysqli_insert_id($conexion);

// Recorrer los productos incluidos en la factura e insertarlos en la tabla "detalle_factura"
$total_factura = 0;
foreach ($productos as $producto) {
    $nombre = $producto['nombre'];
    $cantidad = $producto['cantidad'];
    $precio_unitario = $producto['precio_unitario'];
    $total = $cantidad * $precio_unitario;
    $total_factura += $total;

    $sql = "INSERT INTO detalle_factura (factura_id, producto, cantidad, precio_unitario, total) 
          VALUES ('$factura_id', '$nombre', '$cantidad', '$precio_unitario', '$total')";
    $resultado = mysqli_query($conexion, $sql);
}

// Actualizar el total de la factura en la tabla "factura"
$sql = "UPDATE factura SET total = '$total_factura' WHERE id = '$factura_id'";
$resultado = mysqli_query($conexion, $sql);

// Mostrar mensaje de éxito al usuario
echo "La factura se ha creado correctamente.";

?>