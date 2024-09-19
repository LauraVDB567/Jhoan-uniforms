<?php
// Datos de la factura
$fecha = date("d-m-Y");
$numero_factura = "001";
$cliente = "Juan Pérez";
$direccion_cliente = "Calle 123, Ciudad";
$total = 100.00;

// Datos del proveedor
$proveedor = "Empresa XYZ";
$direccion_proveedor = "Calle 456, Ciudad";
$nit = "1234567890";

// Detalles de la factura
$detalles = array(
    array("Cantidad" => 2, "Descripción" => "Producto 1", "Precio" => 20.00),
    array("Cantidad" => 1, "Descripción" => "Producto 2", "Precio" => 30.00)
);
?>
