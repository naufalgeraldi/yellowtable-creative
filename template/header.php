<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pagename = '';
    $websiteName = ' - Yellow Table';

    $currentPage = basename($_SERVER['SCRIPT_NAME'], '.php');

    if ($currentPage == 'index') {
        $currentPage = 'Home';
    }

    if ($currentPage == 'portofolio') {
        $currentPage = 'Portofolio';
    }

    if ($currentPage == 'about') {
        $currentPage = 'About';
    }

    ?>

    <title><?php echo $currentPage . '' . $websiteName ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <script defer src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="icon" type="image/svg+xml" href="img/Asset 2@2x.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a href="index.php"> <img src="img/Asset 2@2x.png" alt="Logo Agensi Keren" height="40" class="logo"></a>
                </ul>

                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link <?php if ($currentPage == "Home") { ?>active<?php } ?>" aria-current="page" href="index.php"><span>Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($currentPage == "Portofolio") { ?>active<?php } ?>" href="portofolio.php"><span>Portofolio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($currentPage == "About") { ?>active<?php } ?>" href="about.php"><span>About</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mb-4"></div>
    <?php require 'template/function.php'; ?>