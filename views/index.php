<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="icon" type="image/ico" href="../public/img/favicon.ico" />
    <link rel="stylesheet" href="../public/css/bootstrap.min.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="../public/css/estilos.css?v=<?php echo(rand()); ?>">
</head>

<body>
    <?php include 'header/header.php';?>


    <img src="../public/img/bg.jpg" class="img-fluid bg-principal" alt="Fondo">

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




    <div class="card mb-3 anuncio">
        <div class=" row g-0">
            <div class="col-md-6">
                <div class="card-body anuncio-text">
                    <h1 class="card-title">Disfruta en tu TV</h1>
                    <p class="card-text">Ve en smart TV, PlayStation, Xbox, Chromecast, Apple TV, reproductores de
                        Blu-ray y más.</p>

                </div>

            </div>
            <div class="col-md-6 ">
                <img src="../public/img/tv.png" alt="...">
            </div>
        </div>
    </div>

</body>

</html>