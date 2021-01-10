<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>

    <link rel="icon" type="image/ico" href="../../public/img/favicon.ico" />
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="../../public/css/estilos.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="../../public/css/style.css?v=<?php echo(rand()); ?>">
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light nav-home">
            <div class="container-fluid">
                <a href="../index.php" class="navbar-brand"><img class="logo" src="../../public/img/logo.svg"
                        alt="Netflix" srcset=""></a>

            </div>
        </nav>
        <div class="card text-center">

            <div class="card-body">
                <div class="card justify-center text-center card-home">
                    <div class="login-box">

                        <h1 class="h2">Inicia sesión</h1>
                        <form action="">
                            <!--<label for="username">Usuername</label>-->
                            <input type="text" placeholder="Email o número de teléfono">

                            <!--<label for="pass">Password</label>-->
                            <input type="password" placeholder="Contraseña">

                            <input type="submit" value="Iniciar Sesión">
                            </br>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                            </div>
                            <div class="facebook_login">
                                <img src="https://assets.nflxext.com/ffe/siteui/login/images/FB-f-Logo__blue_57.png"
                                    alt="face" width="25px" />
                                <a href="#">Iniciar sesión con Facebook</a>
                            </div>
                            </br>
                            <div class="row suscribe_login">
                                <p class="bolt text-muted">¿Primera vez en Netflix? <a href="#"
                                        class="bolt text-white small"> Suscríbete ya</a> </p>
                            </div>
                            <p class="text-muted small ">Esta página está protegida por Google reCAPTCHA para comprobar
                                que no eres un robot. <span class="text-primary">Más info.</span></p>

                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer_login">

            <div class="card mb-3 anuncio_login footer_home">
                <!--Anuncio 3-->
                <div class=" row footer_space container g-0">
                    <div class="col-md-12 footer_align">
                        <div class="card-body anuncio-text">
                            <p class="footer-top" id="footer_text">¿Preguntas? Llama al <a class="footer-top-a"
                                    href="tel:+1 (408) 469-4467  (USA)">+1 (408) 469-4467 (USA)</a></p>
                            <p class="card-text " id="footer_text">
                            <div class="row align-items-center footer_links ">
                                <div class="col ">
                                    <a class="footer-top-a" href='#'> Preguntas frecuentes </a>
                                    </br>
                                    <a class="footer-top-a" href='#'> Preferencias de cookies</a>

                                </div>
                                <div class="col ">
                                    <a class="footer-top-a" href='#'> Centros de ayuda </a>
                                    </br>
                                    <a class="footer-top-a" href='#'> Informacion corporativa </a>

                                </div>
                                <div class="col ">
                                    <a class="footer-top-a" href='#'> Terminos de uso </a>


                                </div>
                                <div class="col ">
                                    <a class="footer-top-a" href='#'> Privacidad </a>
                                    </br>


                                </div>
                            </div>
                            </p>
                            </br>

                            <select class="form-select" aria-label="Default select example">

                                <option selected>Español</option>
                                <option value="1">Ingles</option>

                            </select>
                            </br>
                            <p style="color:gray;font-size:0.846em;">Netflix Ecuador</p>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </header>

    <script src="../../public/js/app.js"></script>
</body>

</html>