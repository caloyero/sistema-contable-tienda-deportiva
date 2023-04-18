<?php
include('../Controllers/CopiasController.php');
include('../Controllers/ProveedoresController.php');
include('../Controllers/CategoriasController.php');
include('../Controllers/ProductosController.php');
include('../Controllers/VentasController.php');
include('../Controllers/ClientesController.php');

$copiasController = new CopiasController();
$proveedoresController = new ProveedoresController();
$categoriasController = new CategoriasController();
$productosController = new ProductosController();
$ventasController = new VentasController();
$clientesController = new ClientesController();

/* $peticion; */
extract($_REQUEST);
switch ($peticion) {
    case 'crearCopiaBYN':
        $id = NULL;
        $precio = $_POST['precio'];
        $impreciones = $_POST['impreciones'];
        $acomulado_hojas = $impreciones;
        $total = $precio * $impreciones;
        $cliente = $_POST['cliente'];
        $fecha = date_create()->format('Y-m-d');


        $copiasController->crearCopiaBlacoYNegro($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha);
        $mensaje = "Registro Creado";

        header('location:../Views/copias_blanco_y_negro.php?mensaje');

        break;

    case 'eliminarCopiasBYN':
        $id = $_GET['id'];
        $copiasController->eliminarCopiaBlacoYNegro($id);
        header('location:../Views/copias_blanco_y_negro.php');

        break;

    case 'actualizarCopiasBYN':
        $id = $_POST['id'];
        $precio = $_POST['precio'];
        $impreciones = $_POST['impreciones'];
        $acomulado_hojas = $impreciones;
        $total = $precio * $impreciones;
        $cliente = $_POST['cliente'];
        $fecha = date_create()->format('Y-m-d');
        $copiasController->actualizarCopiaBlancoYNegro($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha);
        header('location:../Views/copias_blanco_y_negro.php');

        break;

    case 'listarPorId':
        $id = $_GET['id'];
        $copiasController->showCopiasBYNById($id);
        header('location:../Views/copias_blanco_y_negro.php');

    /* copias a color */

    case 'crearCopiaColor':
        $id = NULL;
        $precio = $_POST['precio'];
        $impreciones = $_POST['impreciones'];
        $acomulado_hojas = $impreciones;
        $total = $precio * $impreciones;
        $cliente = $_POST['cliente'];
        $fecha = date_create()->format('Y-m-d');


        $copiasController->crearCopiaColor($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha);
        $mensaje = "Registro Creado";

        header('location:../Views/copias_color.php?mensaje');

        break;

    case 'eliminarCopiasColor':
        $id = $_GET['id'];
        $copiasController->eliminarCopiaColor($id);
        header('location:../Views/copias_color.php');

        break;

    case 'actualizarCopiasColor':
        $id = $_POST['id'];
        $precio = $_POST['precio'];
        $impreciones = $_POST['impreciones'];
        $acomulado_hojas = $impreciones;
        $total = $precio * $impreciones;
        $cliente = $_POST['cliente'];
        $fecha = date_create()->format('Y-m-d');
        $copiasController->actualizarCopiaColor($id, $precio, $impreciones, $acomulado_hojas, $total, $cliente, $fecha);
        header('location:../Views/copias_color.php');

        break;

    case 'listarPorIdCopiasColor':
        $id = $_GET['id'];
        $copiasController->showCopiasColorById($id);
        header('location:../Views/copias_color.php');

    /* Proveedores */

    case 'crearProveedor':
        $id = NULL;
        $nombre_de_proveedor = $_POST['nombre_de_proveedor'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $precio_compra = $_POST['precio_compra'];

        $proveedoresController->crearProveedor($id, $nombre_de_proveedor, $producto, $cantidad, $direccion, $telefono, $precio_compra);
        header('location:../Views/proveedores.php');

    case 'actuaizarProveedor':
        $id = $_POST['id'];
        $nombre_de_proveedor = $_POST['nombre_de_proveedor'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $precio_compra = $_POST['precio_compra'];

        $proveedoresController->actualizarProveedor($id, $nombre_de_proveedor, $producto, $cantidad, $direccion, $telefono, $precio_compra);
        header('location:../Views/proveedores.php');

    case 'borrarProveedor':
        $id = $_GET['id'];
        $proveedoresController->borrarProveedor($id);
        header('location:../Views/proveedores.php');

    /* Categorias */

    case 'crearCategoria':
        $id = NULL;
        $nombre = $_POST['nombre'];

        $categoriasController->crearCategoria($id, $nombre);
        header('location:../Views/categorias.php');

    case 'editarCategoria':
        $id = NULL;
        $nombre = $_POST['nombre'];

        $categoriasController->actualizarCategorias($id, $nombre);
        header('location:../Views/categorias.php');

    case 'borrarCategoria':
        $id = $_GET['id'];
        $categoriasController->borraCategorias($id);
        header('location:../Views/categorias.php');

    /* Productos */

    case 'crearProducto':
        $id = NULL;
        $nombre = $_POST['nombre'];
        $id_categoria = $_POST['id_categoria'];
        $stock = $_POST['stock'];
        $id_proveedor = $_POST['id_proveedor'];
        $precio_venta = $_POST['precio_venta'];
        $precio_compra = $_POST['precio_compra'];
        $pre_imagen = $_FILES['imagen']['tmp_name'];
        $nombre_imagen = basename($_FILES['imagen']['name']);
        $ruta = "../images/" . $nombre_imagen;
        move_uploaded_file($pre_imagen, $ruta);
        $imagen = $nombre_imagen;

        $productosController->crearProducto($id, $nombre, $id_categoria, $stock, $id_proveedor, $precio_venta, $precio_compra, $imagen);
        header('location:../Views/productos.php');

    case 'editarProducto':
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $id_categoria = $_POST['id_categoria'];
        $stock = $_POST['cantidad'];
        $id_proveedor = $_POST['id_proveedor'];
        $precio_venta = $_POST['precio_venta'];
        $precio_compra = $_POST['precio_compra'];
        $imagen = $_FILES['imagen']['name'];
        if ($imagen) {
            $ruta = "../images/" . $imagen;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
        }

        $productosController->editarProducto($id, $nombre, $id_categoria, $stock, $id_proveedor, $precio_venta, $precio_compra, $imagen);
        header('location:../Views/productos.php');

    case 'borrarProducto':
        $id = $_GET['id'];
        $productosController->borrarProductos($id);
        header('location:../Views/productos.php');


    /* Ventas */

    case 'crearVenta':
        $id_clientes = $_POST['id_cliente'];
        $unidadess = $_POST['unidades'];
        $id_productos = $_POST['id_producto'];
        foreach ($id_productos as $i => $id_producto) {
            $id = NULL;
            $id_producto = $id_productos[$i];
            $id_cliente = $id_clientes[$i];
            $unidades = $unidadess[$i];
            $producto = $productosController->listarProductosById($id_producto);
            $precio_unidad = intval($producto->precio_venta);
            $nombre_producto = $producto->nombre;
            $total = intval($precio_unidad) * intval($unidades);
            $ventasController->crearVenta($id, $id_producto, $id_cliente, $unidades, $precio_unidad, $nombre_producto, $total);
        }

        header('location:../Views/ventas.php');
        break;


    case 'editarVenta':
        $ids = $_POST['id'];
        $id_producto = $_POST['id_producto'];
        $id_cliente = $_POST['id_cliente'];
        $unidades = $_POST['unidades'];
        $precio_unidade = $_POST['precio_unidad'];
        $nombre_producto = $_POST['nombre_producto'];
        $totales = $unidades * $precio_unidad;


        $ventasController->actualizarVenta($id, $id_producto, $id_cliente, $unidades, $precio_unidad, $total);
        header('location:../Views/ventas.php');


    case 'borrarVenta':
        $id = $_GET['id'];
        $ventasController->borrarVenta($id);
        header('location:../Views/ventas.php');

    /* cliente */

    case 'crearCliente':
        $id = NULL;
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $clientesController->crearCliente($id, $nombre, $telefono, $direccion, $correo);
        header('location:../Views/Clientes.php');



    case 'editarCliente':
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $clientesController->editarCliente($id, $nombre, $telefono, $direccion, $correo);
        header('location:../Views/Clientes.php');

    case 'borrarCliente':
        $id = $_GET['id'];
        $clientesController->borrarCliente($id);
        header('location:../Views/Clientes.php');
}
?>