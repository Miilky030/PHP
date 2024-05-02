<?php

include "connection.php";

$usuario = $_POST['id_usuario'];
$tipo_pago = $_POST['tipo_pago'];
$subtotal = $_POST['monto_subtotal'];
$itbis = $_POST['itbis'];
$total = $_POST['monto_total'];

$sqlinsert = "insert into venta values(0,'$usuario',curdate(),'$tipo_pago','$subtotal','$itbis','$total');";

mysqli_query($mysqli, $sqlinsert);

header("location:./index.php?insert=success");