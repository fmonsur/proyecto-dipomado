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
      <div class="col-lg-12 mt-5">
        <center>          
          <h3>Ingreso</h3>
        </center>
      </div>
    </div>

    <div class="row justify-content-md-center">
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <form id="frm-login">
          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="contrasenia">Contraseña</label>
            <input type="password" class="form-control" id="contrasenia" name="contrasenia">
          </div>

          <a href="../registro">Registrarse</a>
          <button type="submit" class="btn btn-primary float-right">Ingresar</button>
        </form>
        <hr class="mt-5 mb-2">
        <div class="text-center">
          <a class="text-center" href="../../">Inicio</a>          
        </div>
      </div>
    </div>

  </div> 
  <?php include_once "../../estructura/estructura-button.php" ?>
  <script src="../../public/js/login.js"></script>
</body>
</html>