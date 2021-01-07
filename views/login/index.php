<?php
 include_once '../conf.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="icon" type="image/ico" href="<?= host ?>public/img/favicon.ico" />
    <link rel="stylesheet" href="<?= host ?>public/css/bootstrap.min.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="<?= host ?>public/css/estilos.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="<?= host ?>public/css/style.css?v=<?php echo(rand()); ?>">
</head>

<body>
<header>
    <nav class="navbar navbar-light bg-light nav-home">
        <div class="container-fluid">
            <a class="navbar-brand"><img class="logo" src="<?= host ?>public/img/logo.svg" alt="Netflix" srcset=""></a>
            
        </div>
    </nav>
</header>

    <!--<img src="<?= host ?>public/img/login_banner.jpg" class="img-fluid bg-principal w-100" alt="Fondo">-->
    

    <div class="card justify-center text-center card-home">
      <div class="login-box">
        
        <h1 class="h2">Inicia sesión</h1>
        <form action="">
            <!--<label for="username">Usuername</label>-->
            <input type="text" placeholder="Email o número de teléfono">

            <!--<label for="pass">Password</label>-->
            <input type="password" placeholder="Contraseña">

            <input type="submit" value="Iniciar Sesión">

            <a href="#">Recordar su contraceña</a><br>
            <i><img src="https://assets.nflxext.com/ffe/siteui/login/images/FB-f-Logo__blue_57.png" alt="face" width="25px"></i>
            <a href="#">Iniciar sesión con Facebook</a>
            <br>
            <div class="row">
            <p class="bolt text-muted">¿Primera vez en Netflix?  <a href="#" class="bolt text-white small">  Suscríbete ya</a> </p>
            </div>
            <p class="text-muted small ">Esta página está protegida por Google reCAPTCHA para comprobar que no eres un robot. <span class="text-primary">Más info.</span></samp></p>
            
        </form>
       
      </div>
      
     
    </div>
    <footer class="text-muted">
        <div class="justify-content-center m-5  text-center">
        <a href="" class="text-muted">¿Preguntas? Llama al +1 (408) 469-4467 (USA)</a>
        <br>
        <div class="row mt-4">
            <div class="col"> Preguntas frecuentes</div>
            <div class="col">Centro de ayuda</div>
            <div class="col">Términos de uso</div>
            <div class="col">Preferencias de cookies</div>
            <div class="col">Información corporativa</div>
        </div>
        </div>
    </footer>


    <script src="<?= host ?>public/js/app.js"></script>
</body>
</html>