<?php
<<<<<<< HEAD
=======
 include_once './conf.php';
?>

>>>>>>> f71bbf67d4285f8300bfb9df194c60201f4cf38e
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
<<<<<<< HEAD
    <link rel="icon" type="image/ico" href="../public/img/favicon.ico" />
    <link rel="stylesheet" href="../public/css/bootstrap.min.css?v=<?php echo(rand()); ?>">
<link rel="stylesheet" href="../public/css/estilos.css?v=<?php echo(rand()); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
=======
    <link rel="icon" type="image/ico" href="<?= host ?>public/img/favicon.ico" />
    <link rel="stylesheet" href="<?= host ?>public/css/bootstrap.min.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="<?= host ?>public/css/estilos.css?v=<?php echo(rand()); ?>">

>>>>>>> f71bbf67d4285f8300bfb9df194c60201f4cf38e
</head>

<body>
    <?php include 'header/header.php';?>


    <img src="<?= host ?>public/img/bg.jpg" class="img-fluid bg-principal" alt="Fondo">

    <div class="card text-center card-home">
        <div class="card-header">
            <h1> Películas y series ilimitadas y mucho más </h1>
        </div>
        <div class="card-body">
            <h5 class="card-title">Disfruta donde quieras. Cancela cuando quieras.</h5>
            <p class="card-text">¿Quieres ver Netflix ya? Ingresa tu email para crear una cuenta o reiniciar tu
                membresía de Netflix.</p>
            <div class="input-group mb-3 input-home container">
                <input type="text" class="form-control" placeholder="Email" aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <button type="submit" class="input-group-text " id="basic-addon2">Comienza ya</button>
            </div>

        </div>

    </div>



    <!-- Primera seccion -->

    <div class="card mb-3 anuncio">
        <!--Anuncio 1-->
        <div class=" row g-0 ">
            <div class="col-md-6">
                <div class="card-body anuncio-text">
                    <h1 class="card-title">Disfruta en tu TV</h1>
                    <p class="card-text">Ve en smart TV, PlayStation, Xbox, Chromecast, Apple TV, reproductores de
                        Blu-ray y más.</p>

                </div>

            </div>
            <div class="col-md-6 ">
                <img src="<?= host ?>public/img/tv.png" alt="...">
                <video class="video_home" autoplay="" playsinline="" muted="" loop="">
                    <source
                        src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-0819.m4v"
                        type="video/mp4">
                </video>
            </div>
        </div>


    </div>

    <!-- Segunda seccion-->


    <div class="card mb-3 anuncio">
        <!--Anuncio 2-->
        <div class=" row g-0 ">
            <div class="col-md-6">

                <img class="imagen_mobil" src="<?= host ?>public/img/mobil.jpg" alt="...">
            </div>
            <div class="col-md-6 ">
                <div class="card-body anuncio-text">
                    <h1 class="card-title">Descarga tus series para verlas offline.</h1>
                    <p class="card-text">Guarda tu contenido favorito y ten siempre algo para ver.</p>

                </div>

            </div>
        </div>


    </div>

    <!--Tercera seccion -->


    <div class="card mb-3 anuncio">
        <!--Anuncio 3-->
        <div class=" row g-0 ">
            <div class="col-md-6">
                <div class="card-body anuncio-text">
                    <h1 class="card-title">Disfruta donde quieras.</h1>
                    <p class="card-text anuncio3_text">Películas y series ilimitadas en tu teléfono,
                        tablet, computadora y TV sin
                        costo extra.</p>

                </div>

            </div>
            <div class="col-md-6 ">
                <img src="<?= host ?>public/img/mac.png" alt="...">
                <video class="video_home_second" autoplay="" playsinline="" muted="" loop="">
                    <source
                        src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-devices.m4v"
                        type="video/mp4">
                </video>
            </div>
        </div>


    </div>

    <!--Seccion de preguntas frecuentes -->

    <div class="card mb-3 anuncio">
        <!--Anuncio 3-->
        <div class=" row g-0 ">
            <div class="col-md-12">

                <h1 class="preguntas_frecuentes">Preguntas frecuentes</h1>

                <div class="accordion accordion-flush accordion_home " id="accordionFlushExample">
                    <div class="accordion-item container ">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                ¿Qué es Netflix?
                                <svg id="thin-x" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-x svg-closed"
                                    focusable="true">
                                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3
                                         20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z">
                                    </path>
                                </svg>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                proident. Ad vegan excepteur butcher vice lomo.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item container">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                ¿Cuánto cuesta Netflix?
                                <svg id="thin-x" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-x svg-closed"
                                    focusable="true">
                                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 
                                        11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z">
                                    </path>
                                </svg>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                proident. Ad vegan excepteur butcher vice lomo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item container">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                ¿Dónde puedo ver Netflix?
                                <svg id="thin-x" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-x svg-closed"
                                    focusable="true">
                                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5
                                         10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z">
                                    </path>
                                </svg>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                proident. Ad vegan excepteur butcher vice lomo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item container">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                ¿Còmo cancelo?
                                <svg id="thin-x" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-x svg-closed"
                                    focusable="true">
                                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3
                                         20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z">
                                    </path>
                                </svg>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                proident. Ad vegan excepteur butcher vice lomo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item container">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                ¿Què puedo ver en Netflix?
                                <svg id="thin-x" viewBox="0 0 26 26" class="svg-icon svg-icon-thin-x svg-closed"
                                    focusable="true">
                                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 
                                        20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z">
                                    </path>
                                </svg>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                proident. Ad vegan excepteur butcher vice lomo.
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <h6 class="card-title form_home">¿Quieres ver Netflix ya? Ingresa tu email para crear una cuenta o
                        reiniciar
                        tu
                        membresía de Netflix.</h6>

                    <div class="input-group input_home mb-3 input-home container">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <button type="submit" class="input-group-text " id="basic-addon2">Comienza ya</button>
                    </div>

                </div>

            </div>

        </div>


    </div>
    <!-- Fin de Preguntas -->

    <!-- footer -->

    <?php include 'footer/footer.php';?>


<<<<<<< HEAD
    <script src="../public/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
=======
    <script src="<?= host ?>public/js/app.js"></script>
>>>>>>> f71bbf67d4285f8300bfb9df194c60201f4cf38e

</body>

</html>
?>