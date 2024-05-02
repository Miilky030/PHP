<!DOCTYPE html>
<html>
    <head>
  <title>Iniciar sesion</title>
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

  <h3>Formulario de venta</h3><br>
        <form method="post" action="insertar.php">
            <div class="form-group">
              <label for="exampleInputEmail1">ID de usuario</label>
              <input type="text" name="id_usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div><br>
            <div class="form-group">
              <label for="exampleInputPassword1">Tipo de pago</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="tipo_pago">
            </div><br>
            <div class="form-group">
              <label for="exampleInputPassword1">Monto subtotal</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="monto_subtotal">
            </div><br>
            <div class="form-group">
              <label for="exampleInputPassword1">ITBIS</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="itbis">
            </div><br>
            <div class="form-group">
              <label for="exampleInputPassword1">Monto total</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="monto_total">
            </div><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form><br>

          <form method="post" action="update.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Código de la venta</label>
              <input type="text" name="id_venta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div><br>
            <button type="submit" class="btn btn-primary">Buscar venta</button>
          </form>

    </body>
</html>