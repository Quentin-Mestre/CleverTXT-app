<?php
/**
 * Created by PhpStorm.
 * User: quest
 * Date: 24/04/2018
 * Time: 15:23
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>
        CleverTXT
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
            integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body id="myPage page-tarifs" data-spy="scroll" data-target=".navbar" data-offset="50">

<div id="corpus">

    <!-- =========================================================================
    Nav Menu
    ========================================================================== -->
    <nav id="navmenu" class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/Logo/clevertxt-color-horizontal%20copy%202.png" title="CleverTXT" alt="CleverTXT">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#push"
                    aria-controls="push" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="push" role="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  mr-3 hidden-lg-up">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item mr-3"><a class="nav-link" href="index.php?go=fonc">Fonctionnalités</a></li>
                    <li class="nav-item mr-3"><a class="nav-link" href="tarifs.php">Tarifs</a></li>
                    <li class="nav-item mr-3 hidden-md-down">
                        <a href="https://app.clevertxt.com/login" role="button" class="mb-2 btn btn-outline btn-out-ro">
                            Connexion
                        </a>
                    </li>
                    <li class="nav-item mr-3 hidden-lg-up">
                        <a href="https://app.clevertxt.com/login" role="button" class="mb-2 btn btn-outline-light">
                            Connexion
                        </a>
                    </li>
                    <li class="nav-item"><a href="https://app.clevertxt.com/register" role="button"
                                            class="mb-2 btn btn-default btn-round-ro">Créer un compte <span
                                    class="badge badge-light">BÊTA</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- =========================================================================
    Contenu
    ========================================================================== -->
    <div class="container">

        <div class="my-5 py-5 mx-0 row justify-content-md-center">
            <div class="col-md-12 text-center py-5 px-4" id="tarif">
                <h1 class="my-5">Bonne nouvelle,<br> pendant la bêta l'accès à la solution est <span
                            class="or">gratuit</span>.
                </h1>
                <p class="my-5">Seul l'envoi de SMS vous est facturé.<br><strong>Prix unitaire du SMS : 6,9 cts</strong></p>
                <form>
                    <div class="form-row justify-content-center">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="nbsms">Nombre de SMS à envoyer :</label>
                                <input type="number" class="form-control form-control-lg" id="nbsms" name="nbsms" min="0"
                                       step="5" value="100">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="price">Coût de la campagne :</label>
                            <div class="input-group">
                                <output class="form-control form-control-lg" id="price" name="price">69.00<span class="or"> €</span>
                                </output>
                            </div>
                        </div>
                    </div>
                </form>
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
            $('.navbar-toggler').on('click', function () {
                console.log('click -> toggler');
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
        document.getElementById("nbsms").oninput = function () {
            myFunction()
        };

        function myFunction() {
            document.getElementById("price").innerHTML = (document.getElementById("nbsms").value * 0.69).toFixed(2).toString() + "<span class='or'> €</span>";
        }
    </script>

    <script>
        $(document).ready(function () {
            $("#nbsms").keypress(function (e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    return false;
                }
            });
        });
    </script>

</div>
</body>
</html>
