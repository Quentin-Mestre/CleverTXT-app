<?php
/**
 * Created by PhpStorm.
 * User: quest
 * Date: 24/04/2018
 * Time: 15:23
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        CleverTXT
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<div id="corpus">

    <!-- =========================================================================
    Nav Menu
    ========================================================================== -->
    <div class="menu" style="position:absolute; z-index:5; width: 100%">
        <div class="container mx-auto">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand mr-auto" href="index.php">
                    <img class="img-fluid" src="images/Logo/Logo.png" title="CleverTXT" alt="CleverTXT" style="height: 3rem;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#push"
                        aria-controls="push" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="push" role="navigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-3 hidden-lg-up">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a id="foncLink" class="nav-link" href="#fonc">Fonctionnalités</a>
                        </li>
                        <li class="nav-item mr-3"><a class="nav-link" href="tarifs.php">Tarifs</a></li>
                        <li class="nav-item mr-3">
                            <a href="https://app.clevertxt.com/login" role="button" class="mb-2 btn btn-outline-light">
                                Connexion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://app.clevertxt.com/register" role="button"
                               class="mb-2 btn btn-default btn-ro">
                                Créer un compte <span class="badge badge-light">BÊTA</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- =========================================================================
    Carousel
    ========================================================================== -->
    <div class="carousel slide carousel-fade" data-ride="carousel" id="Homepage-carousel" data-pause="false" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#Homepage-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Homepage-carousel" data-slide-to="1"></li>
            <li data-target="#Homepage-carousel" data-slide-to="2"></li>
            <li data-target="#Homepage-carousel" data-slide-to="3"></li>
            <li data-target="#Homepage-carousel" data-slide-to="4"></li>
            <li data-target="#Homepage-carousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner d-flex flex-column px-0">
            <div class="carousel-item d-flex align-items-center justify-content-center py-5 active" id="slide1">
                <div class="container h-100 py-5 align-self-center">
                    <div class="row w-100 h-100 m-0 justify-content-between align-items-center align-self-center">
                        <div class="col-sm p-3 text-left">
                            <h5>Des sondages plus performant par SMS</h5>
                            <h3>Délivrabilité exceptionnelle</h3>
                            <p>Obtenir l’avis de vos clients est stratégique pour le pilotage de votre activité.
                                Récoltez
                                simplement et facilement leur opinion par SMS grâce à CleverTXT et dopez votre taux de
                                réponse.</p>
                            <!--                            <div class="input-group-carousel px-0 col-md-8">-->
                            <!--                                <input type="text" class="form-control w-100"-->
                            <!--                                       placeholder="Entrez votre numéro de mobile..."-->
                            <!--                                       aria-label="Entrez votre numéro de mobile...">-->
                            <!--                                <a href="#" role="button"-->
                            <!--                                   class="btn btn-default btn-ro w-100 d-md-flex align-items-md-center justify-content-md-center">-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-lg-down">Recevez et testez ce scénario-->
                            <!--                                    gratuitement</span>-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-xl-up">Testez gratuitement</span>-->
                            <!--                                    <img class="ml-auto align-baseline icon" src="images/icon-arrow-white.svg">-->
                            <!--                                </a>-->
                            <!--                            </div>-->
                        </div>
                        <div class="col-sm-5 hidden-md-down device">
                            <img src="images/Carousel/iphone-shape.png" class="img-fluid float-right" title="iphone-shape" alt="">
                            <div class="device-screen">
                                <div class="device-ui">
                                    <div class="device-ui-status-bar">
                                        <div class="float-left px-1">
                                            <i class="fas fa-signal" aria-hidden="true"></i>
                                            <i class="fas fa-wifi"></i>
                                        </div>
                                        <span>09 : 25</span>
                                        <div class="float-right px-1">
                                            <span>100% <i class="fas fa-battery-half"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row device-ui-name-bar align-items-center">
                                        <div class="controls float-left">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="contact d-flex flex-column flex-grow-1">
                                            <!--                                        <i class="fas fa-user-circle"></i>-->
                                            <span>06 99 12 45 78</span>
                                        </div>
                                        <!--                                    <div class="controls float-right">-->
                                        <!--                                        <i class="fas fa-info-circle"></i>-->
                                        <!--                                    </div>-->
                                    </div>
                                    <div class="device-ui-messages">
                                        <div class="d-flex flex-column justify-content-between conv">
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Bonjour, suite à votre visite dans notre magasin Toys “R” Us,
                                                    quelles
                                                    sont les chances que vous nous recommandiez à un ami ou un collègue
                                                    ?
                                                    <br>0 = pas du tout
                                                    <br>10 = fortement
                                                    <br>STOP sms au 36182
                                                </p>
                                            </div>
                                            <div class="message animated float-right right none ">
                                                <p class="my-0">
                                                    6
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Pouvez-vous nous détailler cette note de recommandation ?
                                                </p>
                                            </div>
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    Trop d’attente à la caisse.
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Nous vous remercions pour votre réponse.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="device-ui-input-bar clearfix">
                                        <div class="device-ui-input-bar-emoji">
                                            <i class="fas fa-camera align-top"></i>
                                            <i class="fab fa-app-store-ios align-top"></i>
                                        </div>
                                        <div class="device-ui-input-bar-field">
                                            <span>Message ...</span>
                                            <i class="fas fa-microphone ml-auto align-baseline icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item d-flex align-items-center justify-content-center py-5" id="slide2">
                <div class="container">
                    <div class="row w-100 py-5 m-0 justify-content-sm-between align-items-center">
                        <div class="col-sm p-3 text-left">
                            <h5>Des sondages plus performant par SMS</h5>
                            <h3>Votre message contextualisé</h3>
                            <p>Obtenir l’avis de vos clients est stratégique pour le pilotage de votre activité.
                                Récoltez
                                simplement et facilement leur opinion par SMS grâce à CleverTXT et dopez votre taux de
                                réponse.</p>
                            <!--                            <div class="input-group-carousel px-0 col-md-8">-->
                            <!--                                <input type="text" class="form-control w-100"-->
                            <!--                                       placeholder="Entrez votre numéro de mobile..."-->
                            <!--                                       aria-label="Entrez votre numéro de mobile...">-->
                            <!--                                <a href="#" role="button"-->
                            <!--                                   class="btn btn-default btn-ro w-100 d-md-flex align-items-md-center justify-content-md-center">-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-lg-down">Recevez et testez ce scénario-->
                            <!--                                    gratuitement</span>-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-xl-up">Testez gratuitement</span>-->
                            <!--                                    <img class="ml-auto align-baseline icon" src="images/icon-arrow-white.svg">-->
                            <!--                                </a>-->
                            <!--                            </div>-->
                        </div>
                        <div class="col-sm-5 hidden-md-down">
                            <img src="images/Carousel/iphone-shape.png" class="img-fluid float-right" title="iphone-shape" alt="">
                            <div class="device-screen">
                                <div class="device-ui">
                                    <div class="device-ui-status-bar">
                                        <div class="float-left px-1">
                                            <i class="fas fa-signal" aria-hidden="true"></i>
                                            <i class="fas fa-wifi"></i>
                                        </div>
                                        <span>09 : 25</span>
                                        <div class="float-right px-1">
                                            <span>100% <i class="fas fa-battery-half"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row device-ui-name-bar align-items-center">
                                        <div class="controls float-left">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="contact d-flex flex-column flex-grow-1">
                                            <!--                                        <i class="fas fa-user-circle"></i>-->
                                            <span>06 99 12 45 78</span>
                                        </div>
                                        <!--                                    <div class="controls float-right">-->
                                        <!--                                        <i class="fas fa-info-circle"></i>-->
                                        <!--                                    </div>-->
                                    </div>
                                    <div class="device-ui-messages">
                                        <div class="d-flex flex-column conv">
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Suite à la livraison de vos Nike HyperAdapt, quelles sont les
                                                    chances
                                                    que vous nous recommandiez à un ami ou un collègue ?
                                                    <br>0 = pas du tout
                                                    <br>10 = fortement
                                                    <br>STOP sms au 36182
                                                </p>
                                            </div>
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    9
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Nike vous remercie pour votre réponse.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="device-ui-input-bar clearfix">
                                        <div class="device-ui-input-bar-emoji">
                                            <i class="fas fa-camera align-top"></i>
                                            <i class="fab fa-app-store-ios align-top"></i>
                                        </div>
                                        <div class="device-ui-input-bar-field">
                                            <span>Message ...</span>
                                            <i class="fas fa-microphone ml-auto align-baseline icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item d-flex align-items-center justify-content-center py-5" id="slide3">
                <div class="container">
                    <div class="row w-100 py-5 m-0 justify-content-sm-between align-items-center">
                        <div class="col-sm p-3 text-left">
                            <h5>Des sondages plus performant par SMS</h5>
                            <h3>Taux de réponse élevé</h3>
                            <p>Obtenir l’avis de vos clients est stratégique pour le pilotage de votre activité.
                                Récoltez
                                simplement et facilement leur opinion par SMS grâce à CleverTXT et dopez votre taux de
                                réponse.</p>
                            <!--                            <div class="input-group-carousel px-0 col-md-8">-->
                            <!--                                <input type="text" class="form-control w-100"-->
                            <!--                                       placeholder="Entrez votre numéro de mobile..."-->
                            <!--                                       aria-label="Entrez votre numéro de mobile...">-->
                            <!--                                <a href="#" role="button"-->
                            <!--                                   class="btn btn-default btn-ro w-100 d-md-flex align-items-md-center justify-content-md-center">-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-lg-down">Recevez et testez ce scénario-->
                            <!--                                    gratuitement</span>-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-xl-up">Testez gratuitement</span>-->
                            <!--                                    <img class="ml-auto align-baseline icon" src="images/icon-arrow-white.svg">-->
                            <!--                                </a>-->
                            <!--                            </div>-->
                        </div>
                        <div class="col-sm-5 hidden-md-down">
                            <img src="images/Carousel/iphone-shape.png" class="img-fluid float-right" title="iphone-shape" alt="">
                            <div class="device-screen">
                                <div class="device-ui">
                                    <div class="device-ui-status-bar">
                                        <div class="float-left px-1">
                                            <i class="fas fa-signal" aria-hidden="true"></i>
                                            <i class="fas fa-wifi"></i>
                                        </div>
                                        <span>09 : 25</span>
                                        <div class="float-right px-1">
                                            <span>100% <i class="fas fa-battery-half"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row device-ui-name-bar align-items-center">
                                        <div class="controls float-left">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="contact d-flex flex-column flex-grow-1">
                                            <!--                                        <i class="fas fa-user-circle"></i>-->
                                            <span>06 99 12 45 78</span>
                                        </div>
                                        <!--                                    <div class="controls float-right">-->
                                        <!--                                        <i class="fas fa-info-circle"></i>-->
                                        <!--                                    </div>-->
                                    </div>
                                    <div class="device-ui-messages">
                                        <div class="d-flex flex-column conv">
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Bonjour, vous venez d’assister au petit déjeuner Capgemini sur le
                                                    thème
                                                    du Big Data, quel est votre niveau de satisfaction vis à vis de cet
                                                    évènement ?
                                                    <br>1. Très satisfait(e)
                                                    <br>2. Satisfait(e)
                                                    <br>3. Plutôt pas satisfait(e)
                                                    <br>4. Pas satisfait(e)
                                                </p>
                                            </div>
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    1
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Merci pour votre réponse.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="device-ui-input-bar clearfix">
                                        <div class="device-ui-input-bar-emoji">
                                            <i class="fas fa-camera align-top"></i>
                                            <i class="fab fa-app-store-ios align-top"></i>
                                        </div>
                                        <div class="device-ui-input-bar-field">
                                            <span>Message ...</span>
                                            <i class="fas fa-microphone ml-auto align-baseline icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item d-flex align-items-center justify-content-center py-5" id="slide4">
                <div class="container">
                    <div class="row w-100 py-5 m-0 justify-content-sm-between align-items-center">
                        <div class="col-sm p-3 text-left">
                            <h5>Des sondages plus performant par SMS</h5>
                            <h3>Pensé pour tous les mobiles</h3>
                            <p>Obtenir l’avis de vos clients est stratégique pour le pilotage de votre activité.
                                Récoltez
                                simplement et facilement leur opinion par SMS grâce à CleverTXT et dopez votre taux de
                                réponse.</p>
                            <!--                            <div class="input-group-carousel px-0 col-md-8">-->
                            <!--                                <input type="text" class="form-control w-100"-->
                            <!--                                       placeholder="Entrez votre numéro de mobile..."-->
                            <!--                                       aria-label="Entrez votre numéro de mobile...">-->
                            <!--                                <a href="#" role="button"-->
                            <!--                                   class="btn btn-default btn-ro w-100 d-md-flex align-items-md-center justify-content-md-center">-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-lg-down">Recevez et testez ce scénario-->
                            <!--                                    gratuitement</span>-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-xl-up">Testez gratuitement</span>-->
                            <!--                                    <img class="ml-auto align-baseline icon" src="images/icon-arrow-white.svg">-->
                            <!--                                </a>-->
                            <!--                            </div>-->
                        </div>
                        <div class="col-sm-5 hidden-md-down">
                            <img src="images/Carousel/iphone-shape.png" class="img-fluid float-right" title="iphone-shape" alt="">
                            <div class="device-screen">
                                <div class="device-ui">
                                    <div class="device-ui-status-bar">
                                        <div class="float-left px-1">
                                            <i class="fas fa-signal" aria-hidden="true"></i>
                                            <i class="fas fa-wifi"></i>
                                        </div>
                                        <span>09 : 25</span>
                                        <div class="float-right px-1">
                                            <span>100% <i class="fas fa-battery-half"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row device-ui-name-bar align-items-center">
                                        <div class="controls float-left">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="contact d-flex flex-column flex-grow-1">
                                            <!--                                        <i class="fas fa-user-circle"></i>-->
                                            <span>06 99 12 45 78</span>
                                        </div>
                                        <!--                                    <div class="controls float-right">-->
                                        <!--                                        <i class="fas fa-info-circle"></i>-->
                                        <!--                                    </div>-->
                                    </div>
                                    <div class="device-ui-messages">
                                        <div class="d-flex flex-column conv">
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Cher(e) Client(e), certaines de vos coordonnées sont manquantes.
                                                    Afin de
                                                    toujours mieux vous servir, merci de bien vouloir nous communiquer
                                                    votre
                                                    adresse, code postal et ville.
                                                </p>
                                            </div>
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    13 rue Amiral Courbet , 69003
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    La Maif vous remercie.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="device-ui-input-bar clearfix">
                                        <div class="device-ui-input-bar-emoji">
                                            <i class="fas fa-camera align-top"></i>
                                            <i class="fab fa-app-store-ios align-top"></i>
                                        </div>
                                        <div class="device-ui-input-bar-field">
                                            <span>Message ...</span>
                                            <i class="fas fa-microphone ml-auto align-baseline icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item d-flex align-items-center justify-content-center py-5" id="slide5">
                <div class="container">
                    <div class="row w-100 py-5 m-0 justify-content-sm-between align-items-center">
                        <div class="col-sm p-3 text-left">
                            <h5>Des sondages plus performant par SMS</h5>
                            <h3>Conforme RGPD <br>avec "Envoyer mot-clé"</h3>
                            <p>Obtenir l’avis de vos clients est stratégique pour le pilotage de votre activité.
                                Récoltez
                                simplement et facilement leur opinion par SMS grâce à CleverTXT et dopez votre taux de
                                réponse.</p>
                            <!--                            <div class="input-group-carousel px-0 col-md-8">-->
                            <!--                                <input type="text" class="form-control w-100"-->
                            <!--                                       placeholder="Entrez votre numéro de mobile..."-->
                            <!--                                       aria-label="Entrez votre numéro de mobile...">-->
                            <!--                                <a href="#" role="button"-->
                            <!--                                   class="btn btn-default btn-ro w-100 d-md-flex align-items-md-center justify-content-md-center">-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-lg-down">Recevez et testez ce scénario-->
                            <!--                                    gratuitement</span>-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-xl-up">Testez gratuitement</span>-->
                            <!--                                    <img class="ml-auto align-baseline icon" src="images/icon-arrow-white.svg">-->
                            <!--                                </a>-->
                            <!--                            </div>-->
                        </div>
                        <div class="col-sm-5 hidden-md-down">
                            <img src="images/Carousel/iphone-shape.png" class="img-fluid float-right" title="iphone-shape" alt="">
                            <div class="device-screen">
                                <div class="device-ui">
                                    <div class="device-ui-status-bar">
                                        <div class="float-left px-1">
                                            <i class="fas fa-signal" aria-hidden="true"></i>
                                            <i class="fas fa-wifi"></i>
                                        </div>
                                        <span>09 : 25</span>
                                        <div class="float-right px-1">
                                            <span>100% <i class="fas fa-battery-half"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row device-ui-name-bar align-items-center">
                                        <div class="controls float-left">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="contact d-flex flex-column flex-grow-1">
                                            <!--                                        <i class="fas fa-user-circle"></i>-->
                                            <span>06 99 12 45 78</span>
                                        </div>
                                        <!--                                    <div class="controls float-right">-->
                                        <!--                                        <i class="fas fa-info-circle"></i>-->
                                        <!--                                    </div>-->
                                    </div>
                                    <div class="device-ui-messages">
                                        <div class="d-flex flex-column conv">
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    Bonobo
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Je souhaite recevoir la newsletter de Bonobo Jeans.
                                                    <br>Oui/Non
                                                </p>
                                            </div>
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    Oui
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Je souhaite recevoir des invitations aux évènements (ventes privées,
                                                    inaugurations …).
                                                    <br>Oui/Non
                                                </p>
                                            </div>
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    Non
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Merci! L'équipe Bonobo
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="device-ui-input-bar clearfix">
                                        <div class="device-ui-input-bar-emoji">
                                            <i class="fas fa-camera align-top"></i>
                                            <i class="fab fa-app-store-ios align-top"></i>
                                        </div>
                                        <div class="device-ui-input-bar-field">
                                            <span>Message ...</span>
                                            <i class="fas fa-microphone ml-auto align-baseline icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item d-flex align-items-center justify-content-center py-5" id="slide6">
                <div class="container">
                    <div class="row w-100 py-5 m-0 justify-content-sm-between align-items-center">
                        <div class="col-sm p-3 text-left">
                            <h5>Des sondages plus performant par SMS</h5>
                            <h3>Expérience client optimale</h3>
                            <p>Obtenir l’avis de vos clients est stratégique pour le pilotage de votre activité.
                                Récoltez
                                simplement et facilement leur opinion par SMS grâce à CleverTXT et dopez votre taux de
                                réponse.</p>
                            <!--                            <div class="input-group-carousel px-0 col-md-8">-->
                            <!--                                <input type="text" class="form-control w-100"-->
                            <!--                                       placeholder="Entrez votre numéro de mobile..."-->
                            <!--                                       aria-label="Entrez votre numéro de mobile...">-->
                            <!--                                <a href="#" role="button"-->
                            <!--                                   class="btn btn-default btn-ro w-100 d-md-flex align-items-md-center justify-content-md-center">-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-lg-down">Recevez et testez ce scénario-->
                            <!--                                    gratuitement</span>-->
                            <!--                                    <span class="mx-auto d-block text-center hidden-xl-up">Testez gratuitement</span>-->
                            <!--                                    <img class="ml-auto align-baseline icon" src="images/icon-arrow-white.svg">-->
                            <!--                                </a>-->
                            <!--                            </div>-->
                        </div>
                        <div class="col-sm-5 hidden-md-down">
                            <img src="images/Carousel/iphone-shape.png" class="img-fluid float-right" title="iphone-shape" alt="">
                            <div class="device-screen">
                                <div class="device-ui">
                                    <div class="device-ui-status-bar">
                                        <div class="float-left px-1">
                                            <i class="fas fa-signal" aria-hidden="true"></i>
                                            <i class="fas fa-wifi"></i>
                                        </div>
                                        <span>09 : 25</span>
                                        <div class="float-right px-1">
                                            <span>100% <i class="fas fa-battery-half"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row device-ui-name-bar align-items-center">
                                        <div class="controls float-left">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="contact d-flex flex-column flex-grow-1">
                                            <!--                                        <i class="fas fa-user-circle"></i>-->
                                            <span>06 99 12 45 78</span>
                                        </div>
                                        <!--                                    <div class="controls float-right">-->
                                        <!--                                        <i class="fas fa-info-circle"></i>-->
                                        <!--                                    </div>-->
                                    </div>
                                    <div class="device-ui-messages">
                                        <div class="d-flex flex-column conv">
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Mini a le plaisir de vous convier au lancement de la nouvelle Mini
                                                    Cooper S Cabrio DKG. Serez-vous présent(e) ?
                                                    <br>Répondez par Oui ou par Non
                                                    <br>STOP sms au 36184
                                                </p>
                                            </div>
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    Oui
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Serez-vous accompagné(e) ?
                                                    Répondez par Oui ou par Non
                                                </p>
                                            </div>
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    Oui
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Quelle modèle souhaitez-vous essayer ?
                                                    <br>1. Mini Clubman
                                                    <br>2. Mini Countryman
                                                    <br>3. Mini Paceman
                                                    <br>Répondez par 1, 2 ou 3.
                                                </p>
                                            </div>
                                            <div class="message animated right none ">
                                                <p class="my-0">
                                                    2
                                                </p>
                                            </div>
                                            <div class="message animated left none ">
                                                <p class="my-0">
                                                    Merci pour votre réponse, à bientôt.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="device-ui-input-bar clearfix">
                                        <div class="device-ui-input-bar-emoji">
                                            <i class="fas fa-camera align-top"></i>
                                            <i class="fab fa-app-store-ios align-top"></i>
                                        </div>
                                        <div class="device-ui-input-bar-field">
                                            <span>Message ...</span>
                                            <i class="fas fa-microphone ml-auto align-baseline icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- =========================================================================
    Page Content
    ===========================================================================-->
    <!-- Première ligne -->
    <div class="container">
        <div class="row mx-0 justify-content-md-center">
            <div class="col-md-12 pb-3 pt-5 mt-5">
                <h5 class="text-center">Vous êtes en bonne compagnie...</h5>
            </div>
            <div class="col-md-12 py-3">
                <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <div class="p-3 clients">
                        <img class="img-fluid d-block mx-auto" src="images/Client/2000px-KPMG.svg@2x.png" title="KPMG" alt="KPMG">
                    </div>
                    <div class="p-3 clients">
                        <img class="img-fluid d-block mx-auto" src="images/Client/Banquepopulaire_logo.svg@2x.png"
                             title="Banque Populaire" alt="Banque Populaire">
                    </div>
                    <div class="p-3 clients">
                        <img class="img-fluid d-block mx-auto" src="images/Client/Keolis@2x.png" title="Keolis" alt="Keolis">
                    </div>
                    <div class="p-3 clients">
                        <img class="img-fluid d-block mx-auto" src="images/Client/1020px-Darty.svg@2x.png" title="Darty" alt="Darty">
                    </div>
                    <div class="p-3 clients">
                        <img class="img-fluid d-block mx-auto" src="images/Client/280px-BMW.svg@2x.png" title="BMW" alt="BMW">
                    </div>
                    <div class="p-3 clients">
                        <img class="img-fluid d-block mx-auto" src="images/Client/1280px-Engie_logo.svg@2x.png" title="Engie" alt="Engie">
                    </div>
                    <div class="p-3 clients">
                        <img class="img-fluid d-block mx-auto" src="images/Client/Crédit_Agricole@2x.png" title="Crédit Agricole" alt="Crédit Agricole">
                    </div>
                    <div class="p-3 clients">
                        <img class="img-fluid d-block mx-auto" src="images/Client/Logo-Page-Fb-1000x500@2x.png" title="Valtus" alt="Valtus">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deuxième ligne -->
    <div class="container" id="fonc">
        <div class="row mx-0 my-5 py-5 justify-content-md-start content">
            <div class="col-md-12 py-3">
                <h3 class="text-center">Visualisez toutes les données collectées en temps réel</h3>
                <h5 class="text-center">Vous bénéficiez d'une mise à jour des données, idéal pour tous vous
                    événements.</h5>
            </div>
            <div class="col-md-12 py-3">
                <img class="img-fluid" src="images/Homepage/repondantsx2.gif"
                     title="Collecte de données" alt="">
            </div>
        </div>
    </div>


    <!-- Troisième ligne -->
    <div class="container-fluid hidden-xs-down" id="typo">
        <div class="row mx-0 text-center">
            <div class="col-md">
                <h3>Typologie des questions</h3>
                <h5>Vous avez le choix entre plusieurs formats de questions dédiés aux SMS :</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#typo1" role="tab" aria-selected="true">Net
                            Promoter Score</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#typo2" role="tab" aria-selected="false">Texte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#typo3" role="tab"
                           aria-selected="false">Notation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#typo4" role="tab" aria-selected="false">Nombre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#typo5" role="tab"
                           aria-selected="false">Oui/Non</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#typo6" role="tab" aria-selected="false">Choix
                            Multiples</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md tab-content justify-content-center align-items-center">
                <div class="tab-pane h-100 fade show active" id="typo1" role="tabpanel">
                    <img class="img-fluid d-block mx-auto" role="tabpanel"
                         src="images/Homepage/Typo/illustration-typologie@2x.png" title="NPS" alt="NPS: Bonjour Mme Martin, quelle est la probabilité que vous recommandiez notre service à un proche ou un collègue ?">
                </div>
                <div class="tab-pane h-100 fade" id="typo2" role="tabpanel">
                    <img class="img-fluid d-block mx-auto" role="tabpanel"
                         src="images/Homepage/Typo/illustration-typologie%202@2x.png" title="TXT" alt="TXT: Pouvez-vous nous expliquer en quelques mots cette note de recommandation ?">
                </div>
                <div class="tab-pane h-100 fade" id="typo3" role="tabpanel">
                    <img class="img-fluid d-block mx-auto" role="tabpanel"
                         src="images/Homepage/Typo/illustration-typologie%203@2x.png" title="NOT" alt="NOT: Sur une échelle de 1 à 5, quelle ote donneriez-vous à la conférence que vous venez de suivre ?">
                </div>
                <div class="tab-pane h-100 fade" id="typo4" role="tabpanel">
                    <img class="img-fluid d-block mx-auto" role="tabpanel"
                         src="images/Homepage/Typo/illustration-typologie%204@2x.png" title="NB" alt="NB: Quel est votre âge ?">
                </div>
                <div class="tab-pane h-100 fade" id="typo5" role="tabpanel">
                    <img class="img-fluid d-block mx-auto" role="tabpanel"
                         src="images/Homepage/Typo/illustration-typologie%205@2x.png" title="O/N" alt="O/N: Souhaitez-vous participer à notre séminaire ? Répondez Oui ou Non">
                </div>
                <div class="tab-pane h-100 fade" id="typo6" role="tabpanel">
                    <img class="img-fluid d-block mx-auto" role="tabpanel"
                         src="images/Homepage/Typo/illustration-typologie%206@2x.png" title="QCM" alt="QCM: Quelle est votre couleur préférée ? 1.Bleu 2.Rouge 3.Jaune 4.Vert 5.Noir">
                </div>
            </div>
        </div>
    </div>
    <!-- Troisième ligne responsive -->
    <div class="container py-5 hidden-sm-up">
        <div class="row py-4 mx-0 text-center">
            <div class="col-md">
                <h3>Typologie des questions</h3>
                <h5>Vous avez le choix entre plusieurs formats de questions dédiés aux SMS :</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">Net Promoter Score</h4>
            </div>
            <div class="col-md-12">
                <img class="img-fluid d-block mx-auto" role="tabpanel"
                     src="images/Homepage/Typo/illustration-typologie@2x.png" title="NPS" alt="NPS: Bonjour Mme Martin, quelle est la probabilité que vous recommandiez notre service à un proche ou un collègue ?">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">Texte</h4>
            </div>
            <div class="col-md-12">
                <img class="img-fluid d-block mx-auto" role="tabpanel"
                     src="images/Homepage/Typo/illustration-typologie%202@2x.png" title="TXT" alt="TXT: Pouvez-vous nous expliquer en quelques mots cette note de recommandation ?">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">Notation</h4>
            </div>
            <div class="col-md-12">
                <img class="img-fluid d-block mx-auto" role="tabpanel"
                     src="images/Homepage/Typo/illustration-typologie%203@2x.png" title="NOT" alt="NOT: Sur une échelle de 1 à 5, quelle ote donneriez-vous à la conférence que vous venez de suivre ?">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">Nombre</h4>
            </div>
            <div class="col-md-12">
                <img class="img-fluid d-block mx-auto" role="tabpanel"
                     src="images/Homepage/Typo/illustration-typologie%204@2x.png" title="NB" alt="NB: Quel est votre âge ?">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">Oui/Non</h4>
            </div>
            <div class="col-md-12">
                <img class="img-fluid d-block mx-auto" role="tabpanel"
                     src="images/Homepage/Typo/illustration-typologie%205@2x.png" title="O/N" alt="O/N: Souhaitez-vous participer à notre séminaire ? Répondez Oui ou Non">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">Choix Multiple</h4>
            </div>
            <div class="col-md-12">
                <img class="img-fluid d-block mx-auto" role="tabpanel"
                     src="images/Homepage/Typo/illustration-typologie%206@2x.png" title="QCM" alt="QCM: Quelle est votre couleur préférée ? 1.Bleu 2.Rouge 3.Jaune 4.Vert 5.Noir">
            </div>
        </div>
    </div>


    <!-- Quatrième ligne -->
    <div class="container py-5 hidden-sm-down" id="scenar">
        <div class="row mx-0 text-center">
            <div class="col-md">
                <h3>Création de scénarios intelligents</h3>
            </div>
        </div>
        <div class="row justify-content-center py-4">
            <div class="col-md tab-content d-flex justify-content-center align-items-stretch">
                <div class="tab-pane fade align-self-stretch show active" id="scenar1" role="tabpanel">
                    <img class="img-fluid d-block mx-auto" role="tabpanel"
                         src="images/Homepage/Scenar/illustration-logique@2x.png" title="Scénario intelligent : Logique" alt="">
                </div>
                <div class="tab-pane fade align-self-stretch" id="scenar2" role="tabpanel">
                    <img class="img-fluid d-block mx-auto" role="tabpanel"
                         src="images/Homepage/Scenar/illustration-personnalisation@2x.png" title="Scénario intelligent : Personnalisation" alt="">
                </div>
                <div class="tab-pane fade align-self-stretch" id="scenar3" role="tabpanel">
                    <img class="img-fluid d-block mx-auto" role="tabpanel"
                         src="images/Homepage/Scenar/illustration-sms-complementaire@2x.png" title="Scénario intelligent : SMS Complémentaire" alt="">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md">
                <ul class="nav nav-pills justify-content-center row" role="tablist">
                    <li class="nav-item col-md-4">
                        <a class="nav-link text-center h-100 p-2 active" data-toggle="pill" href="#scenar1" role="tab"
                           aria-selected="true">
                            <h4>Logique</h4>
                            <span>Créez des embranchements en fonction des réponses précédentes.</span>
                        </a>
                    </li>
                    <li class="nav-item col-md-4">
                        <a class="nav-link text-center h-100 p-2" data-toggle="pill" href="#scenar2" role="tab"
                           aria-selected="false">
                            <h4>Personnalisation</h4>
                            <span>Véritable source de valeur, utilisez les informations de vos fichiers clients pour personnaliser le contenu de vos SMS.</span>
                        </a>
                    </li>
                    <li class="nav-item col-md-4">
                        <a class="nav-link text-center h-100 p-2" data-toggle="pill" href="#scenar3" role="tab"
                           aria-selected="false">
                            <h4>SMS Complémentaire</h4>
                            <span>Ajoutez un SMS pour clôturer vos questionnaires. Remerciez vos répondants immédiatement ou planifiez un SMS de rappel.</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Quatrième ligne Responsive -->
    <div class="container py-5 hidden-md-up">
        <div class="row mx-0 text-center">
            <div class="col-md">
                <h3>Création de scénarios intelligents</h3>
            </div>
        </div>
        <div class="row py-4 justify-content-center">
            <div class="col-md-12 text-center py-3">
                <h4>Logique</h4>
                <span>Créez des embranchements en fonction des réponses précédentes.</span>
            </div>
            <div class="col-md-12">
                <img class="img-fluid d-block mx-auto" role="tabpanel"
                     src="images/Homepage/Scenar/illustration-logique@2x.png" title="Scénario intelligent : Logique" alt="">
            </div>
        </div>
        <div class="row py-4 justify-content-center">
            <div class="col-md-12 text-center py-3">
                <h4>Personnalisation</h4>
                <span>Véritable source de valeur, utilisez les informations de vos fichiers clients pour personnaliser le contenu de vos SMS.</span>
            </div>
            <div class="col-md-12">
                <img class="img-fluid d-block mx-auto" role="tabpanel"
                     src="images/Homepage/Scenar/illustration-logique@2x.png" title="Scénario intelligent : Personnalisation" alt="">
            </div>
        </div>
        <div class="row py-4 justify-content-center">
            <div class="col-md-12 text-center py-3">
                <h4>SMS Complémentaire</h4>
                <span>Ajoutez un SMS pour clôturer vos questionnaires. Remerciez vos répondants immédiatement ou planifiez un SMS de rappel.</span>
            </div>
            <div class="col-md-12">
                <img class="img-fluid d-block mx-auto" role="tabpanel"
                     src="images/Homepage/Scenar/illustration-logique@2x.png" title="Scénario intelligent : SMS Complémentaire" alt="">
            </div>
        </div>
    </div>


    <!-- Cinquième ligne -->
    <div class="container-fluid" id="simulateur">
        <div class="row mx-0 mt-5 pt-5 justify-content-center">
            <div class="col-md-12 py-3">
                <h3 class="text-center">Bénéficiez d'un simulateur</h3>
                <h5 class="text-center">Générez vos conversation SMS à l'aide d'un simulateur et testez<br> toutes les
                    combinaisons possibles de votre scénario.</h5>
            </div>
            <div class="col-md">
                <img class="img-fluid d-block mx-auto" src="images/Homepage/illustration-simulateur@2x.png" title="Simulateur" alt="">
            </div>
        </div>
    </div>

    <footer id="footer" class="text-center">

        <div class="container" style="width: 90%; max-width: 1500px">
            <div class="py-5 d-md-flex flex-md-row align-items-center justify-content-center">
                <div class="col-md-2 p-2 mx-auto" style="max-width: 150px">
                    <img class="img-fluid d-block mx-auto" src="images/Footer/icon-test-beta@2x.png" title="Logo bêta" alt="bêta">
                </div>
                <div class="col-md-7 text-left p-2">
                    <h2>Essayer gratuitement CleverTXT</h2>
                    <p>Créez un compte en version bêta <strong>dès maintenant</strong></p>
                </div>
                <div class="col-md-4 p-2">
                    <a href="https://app.clevertxt.com/register" role="button"
                       class="btn btn-lg btn-block btn-default btn-grad-roor">
			            <span class="mx-auto text-center">
			              Créez un compte bêta dès maintenant
			            </span>
                        <img class="ml-2 icon" src="images/icon-arrow-white.svg" title="right arrow" alt="">
                    </a>
                </div>
            </div>

            <div class="my-5 d-md-flex flex-md-row align-items-center justify-content-center">
                <div class="col-md-2 p-2 mx-auto" style="max-width: 150px">
                    <img class="img-fluid d-block mx-auto" src="images/Footer/icon-demo@2x.png" title="Démo" alt="">
                </div>
                <div class="col-md-7 text-left p-2">
                    <h2>Demander une démo CleverTXT</h2>
                    <p>Prenez rendez-vous pour une présentation de la solution <br><strong>- Gratuit & Rapide -</strong>
                    </p>
                </div>
                <div class="col-md-4 p-2">
                    <a href="#" role="button" class="btn btn-lg btn-block btn-default btn-blanc-or">
                    	Demander une démo
                        <img class="ml-2 icon" src="images/icon-arrow-orange.svg" title="right arrow" alt="">
                    </a>
                </div>
            </div>

            <hr width="90%">

            <div class="d-sm-flex align-items-center">
                <nav class="nav mh-100 flex-column justify-content-start p-2">
                    <div class="navbar-header text-left">
                        <a class="navbar-brand" href="#">CleverTXT</a>
                    </div>
                    <a href="#" class="nav-link">À propos</a>
                    <a href="#" class="nav-link">Jobs / Stages</a>
                </nav>
                <nav class="nav mh-100 flex-column justify-content-start p-2">
                    <div class="navbar-header text-left">
                        <a class="navbar-brand" href="#">Ressources</a>
                    </div>
                    <a href="#" class="nav-link">API</a>
                    <a href="#" class="nav-link">Centres d'aide</a>
                </nav>
                <div class="nav ml-auto align-self-center p-2">
                    <a href="#" class="mr-5 nav-item">
                    	<img src="images/Footer/twitter-icon.svg" title="Twitter" alt="">
                    </a>
                    <a href="#" class="nav-item">
                    	<img src="images/Footer/linkedin-icon.svg" title="LinkedIn" alt="">
                    </a>
                </div>
            </div>
        </div>

    </footer>

    <script>
        $(function () {
            let current = $(".active"),
                el      = current.find(".animated").first(),
                t       = 500,
                nb      = current.find(".animated").length;
                i       = 0;


            launch2(el, i, nb);
            $(document).ready(function () {
                $('#Homepage-carousel').on('slid.bs.carousel', function () {
                    reset();
                    el = current.find(".animated").first();
                    nb  = current.find(".animated").length;
                    i = 0;

                    launch2(el, i, nb);
                });
            });

            function launch2(el, i, max) {
                setTimeout(function () {
                    go(el, i);
                    i++;
                    el = el.nextUntil(".device-ui-messages").first();
                    if(i <= max) {
                        launch2(el, i, max);
                    } else {
                        next();
                    }
                }, 2000);
            }

            function go(el, i) {
                el.removeClass('none');
                if (i % 2 === 0) {
                    el.addClass('fadeInUp');
                } else {
                    el.addClass('fadeInDown');
                }
            }

            function next() {
                setTimeout(function () {
                    $('.carousel').carousel('next');
                }, 2000);
            }

            function reset() {
                let animated = $(".animated");
                animated.removeClass('fadeInUp');
                animated.removeClass('fadeInDown');
                animated.addClass('none');
            }
        })
    </script>

    <script>
        $(function () {
            $('.navbar-toggler').on('click', function () {
                const   menu = $('#push'),
                        body = $('#corpus');
                if (menu.hasClass('show')) {
                    menu.animate({right: '-' + menu.innerWidth()}, 400);
                    body.animate({left: '0px'}, 400);
                } else {
                    menu.animate({right: "0px"}, 400);
                    body.animate({left: '-' + menu.innerWidth()}, 400);
                }
            });

            $(document).on('click', function () {
                if ($('#push').hasClass('show')) {
                    $('.navbar-toggler').trigger('click');
                }
            });
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#foncLink').on('click', function() {
                var page    = $(this).attr('href'),
                    speed   = 750;
                $('html, body').animate( { scrollTop: $(page).offset().top }, speed );
                $(document).trigger('click');
                return false;
            });
            if (window.location.href.includes('fonc')) {
                $('#foncLink').trigger('click');
            }
        });
    </script>

</div>
</body>
</html>
