<!DOCTYPE html>
<html lang="es">
<head>
  <?php include_once "../../estructura/estructura-top.php" ?>
</head>
<body>
  <div class="container">

    <div class="row">
      <div class="col-lg-12 mt-5">
        <center>          
          <img src="../../public/img/logo.png" alt="" width="200px">
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 mt-3">
        <center>          
          <h3>Formulario de registro</h3>
        </center>
      </div>
    </div>

    <div class="row justify-content-md-center">
      <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
        <form id="frm-registro">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
          </div>
          <div class="form-group">
            <label for="contrasenia">Contraseña</label>
            <input type="password" class="form-control" id="contrasenia" name="contrasenia" required>
          </div>
          <div class="form-group">
            <label for="contrasenia2">Repetir contraseña</label>
            <input type="password" class="form-control" id="contrasenia2" name="contrasenia2" required>
          </div>

          <button type="submit" class="btn btn-primary float-right">Enviar</button>
          <a href="../login">Ingresar</a>
        </form>
        <hr class="mt-5 mb-2">
        <div class="text-center">
          <a class="text-center" href="../../">Inicio</a>          
        </div>
      </div>
    </div>

  </div> 
  <?php include_once "../../estructura/estructura-button.php" ?>
  <script src="../../public/js/registro.js"></script>
</body>
</html>