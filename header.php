<?php require_once "functions.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/811c866c3a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="./assets/js/script.js"></script>
    <!-- <script defer src="./assets/js/jquery.js"></script> -->
</head>

<body>
    <header class=<?= writeClasses() ?>>
        <nav class="navbar navbar-dark navbar-expand-lg z-index-2 position-fixed w-100">
            <div class="container-fluid">
                <a class="navbar-brand d-lg-none" href="index.php"><img class="img-logo" src="./assets/img/logo.png" alt="logo"></a>
                <div class="toggler-container">
                    <div class="toggler">
                        <div class="burger"></div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                    </div>
                    <div class="offcanvas-body align-items-center justify-content-between text-uppercase">
                        <a class="navbar-brand" href="index.php"><img class="img-logo" src="./assets/img/logo.png" alt="logo"></a>
                        <ul class="navbar-nav text-white">
                            <?php
                            $dropDownInfo =
                                [
                                    "parentItemClass" => "nav-item dropdown",
                                    "parentLinkClass" => "nav-link dropdown-toggle",
                                    "parentLinkName" => "les activités",
                                    "listClass" => "dropdown-menu dropdown-menu-dark",
                                    "childLinksClass" => "dropdown-item",
                                    "childLinksNames" => ["le cycling", "le training fonctionnel", "le crossfit", "personnal training - coach personnel"],
                                    "childLinksLink" => ["cycling", "fonctionnal-training", "crossfit", "personnalTraining"]
                                ];
                            createNavItem(1, ["l'équipe"], ["team"]);
                            createDropdownMenu(4, $dropDownInfo);
                            createNavItem(4, ["nos offres", "planning", "le blog", "contact"], ["offers", "planning", "blog", "contact"])
                            ?>
                        </ul>

                        <div class="phone-container">
                            <a class="nav-link" href="#"><i class="fa-solid fa-mobile-screen-button"></i>05 59 47 84 18</a>
                        </div>

                        <ul class="navbar-nav justify-content-center flex-row">
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <?php if (getWantedFile() == "index.php") : ?>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators mt-5 z-index-1">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/img/slider/slide_1.jpg" class="img-slider" alt="...">
                        <div class="carousel-caption d-none d-md-block py-md-3">
                            <h2 class="mb-sm-02 mb-lg-2 py-md-3">2 inscriptions simultanées = un 3<span class="align-text-top fs-sm-8 fs-lg-6">ème</span> abonnement de 6 mois
                                offert !</p>
                                <a class="btn btn-outline-light fs-sm-8 fs-lg-6" href="#">plus d'info</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/img/slider/slide_2.jpg" class="img-slider" alt="carousel button">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/img/slider/slide_3.jpg" class="img-slider" alt="carousel button">
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </header>
    <main>