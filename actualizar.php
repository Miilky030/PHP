<?php

include_once 'connection.php';
$id = $_POST['id_venta'];

if(isset($_POST['update'])){
    $id = $_POST['id_venta'];
    $query = "UPDATE venta SET id_usuario='$_POST[id_usuario]',fecha='$_POST[fecha]',tipo_pago='$_POST[tipo_pago]', monto_subtotal='$_POST[monto_subtotal]', itbis='$_POST[itbis]', monto_total='$_POST[monto_total]' where id_venta=$id;";
    mysqli_query($mysqli, $query);
   
}


header("location: ./index.php?insert=success");
