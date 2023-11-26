<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/tallerphp20/routes.php');
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title> inicio de sesión animado &amp; CSS Only</title>
  <link rel="stylesheet" href="/tallerphp20/assets/css/style.css">
  <?php include_once(ROOT_PATH . 'header.php') ?>
</head>

<body> <!-- partial:index.partial.html -->
<form id="formLogin" method="post" autocomplete="off">  
    <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
     <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <div class="signin">
        <div class="content">
          <h2>Inicio Sesion</h2>
          <div class="form">
            <div class="inputBox">
              <input type="usuario" name="usuario" id="usuario" class="formcontrol form-control-lg" 
              placeholder="ingrese usuario" autocorrect="off" spellcheck="false" /> <i>Usuario</i>
            </div>

            <div class="form">
              <div class="inputBox">
                <input type="password" name="clave" id="clave" class="formcontrol form-control-lg" 
                placeholder="digite contraseña" autocorrect="off" spellcheck="false" /> <i>contraseña</i>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg" 
                style="padding-left: 2.5rem; padding-right:2.5rem;">Acceder</button>
              </div>

              <div class="text-center fs-6">
                <a href="#">Olvide mi clave</a> /O/ <a href="#">registrarme</a>
              </div>
            </div>
          </div>
        </div>
    </section> <!-- partial -->
    </form>
</body>
<?php include_once(ROOT_PATH . 'footer.php') ?>

</html>