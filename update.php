<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <style>

body{
  margin: 20px;
}

form{
  width: 500px;
}

</style>

    <table class="table">
  <thead class="thead-dark">
        <tr>
            <td>ID</td>
            <td>Usuario</td>
            <td>Fecha</td>
            <td>Tipo pago</td>
            <td>Monto subtotal</td>
            <td>ITBIS</td>
            <td>Monto total</td>
        </tr>
  </thead>
   <tbody>
<?php

include_once 'connection.php';

$id = $_POST['id_venta'];

$query = "select * from venta where id_venta=$id;";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if($total!=0){
    while($row=mysqli_fetch_assoc($data)){
        echo "<tr> <td>".$row['id_venta']."</td><td>".$row['id_usuario']."</td><td>"
        .$row['fecha']."</td><td>".$row['tipo_pago']."</td><td>".$row['monto_subtotal']."</td><td>".$row['itbis']."</td><td>".$row['monto_total']."</td><td><a href='delete.php?rn=$row[id_venta]'>Borrar</a></td></tr>";
    }
}
?>
   </tbody>
    </table><br>

    <?php 
    include ('buscar.php');
    ?>
</body>
</html>