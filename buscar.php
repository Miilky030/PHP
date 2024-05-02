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
<?php
    include_once 'connection.php';
        $id = $_POST['id_venta'];

             $sql = "SELECT * FROM venta where id_venta=$id;";

            $result = mysqli_query($mysqli, $sql);
            $resultCheck = mysqli_num_rows($result);
           // echo $resultCheck;
                if ($resultCheck > 0){
                    $row = mysqli_fetch_assoc($result);
                    $id=$row['id_venta'];
                    $usuario=$row['id_usuario'];
                    $fecha=$row['fecha'];
                    $tipo_pago=$row['tipo_pago'];
                    $subtotal=$row['monto_subtotal'];
                    $itbis=$row['itbis'];
                    $total=$row['monto_total'];
   
                }

?>

<form method="post" action="actualizar.php">
            <div class="form-group">
              <label for="exampleInputEmail1">ID</label>
              <input type="text" name="id_venta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $id?>">
            </div><br>
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="text" name="id_usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $usuario?>">
            </div><br>
            <div class="form-group">
              <label for="exampleInputPassword1">Fecha</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="fecha" value="<?php echo $fecha?>">
            </div><br>
            <div class="form-group">
              <label for="exampleInputEmail1">Tipo de pago</label>
              <input type="text" name="tipo_pago" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $tipo_pago?>">
            </div><br>
            <div class="form-group">
              <label for="exampleInputEmail1">Monto subtotal</label>
              <input type="text" name="monto_subtotal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $subtotal?>">
            </div><br>
            <label for="exampleInputEmail1">ITBIS</label>
              <input type="text" name="itbis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $itbis?>">
            </div><br>
            <label for="exampleInputEmail1">Monto total</label>
              <input type="text" name="monto_total" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $total?>">
            </div><br>
            <button type="submit" class="btn btn-primary" name="update">Editar</button>
          </form><br>
</body>
<html>