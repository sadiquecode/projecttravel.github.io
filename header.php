<!DOCTYPE html>
<html>
<?php include "config.php" ?>

<head>
    <title>Kit</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= $base_url ?>assets/fonts/all.min.css" />
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/slick.css" />
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/slick-theme.css" />
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Google+Sans&display=swap" rel="stylesheet">
    <script src="<?= $base_url ?>assets/js/jquery.min.js"></script>
    <!-- <link rel="icon" href="<?= $base_url ?>assets/img/OnicaLogo.ico" sizes="32x32"> -->
</head>

<body>
    <!-- Move to up button -->
    <div class="scroll-button">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                <path
                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
            </svg></a>
    </div>
    <!-- header -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent Navbar_main py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/Logo.png" alt="Brand-Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center custom_Nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Destinations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Flights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bookings</a>
                        </li>
                    </ul>
                    <div class="align-items-center all_Buttons">
                        <button class="btn button_Log text-center" type="submit">Login</button>
                        <button type="button" class="btn btn-outline-dark button_Sign text-center">Sign up</button>
                        <div class="dropdown">
                            <button class="btn btn-transparent dropdown-toggle button_Drop" type="button"
                                id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                En
                            </button>
                            <ul class="dropdown-menu text-center" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                                <li><a class="dropdown-item" href="#">French</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- header -->