<?php

include_once 'connection.php';
$id = $_GET['rn'];
$query = "delete from venta where id_venta=$id";

$data = mysqli_query($mysqli, $query);


header("location: ./index.php?insert=success");
