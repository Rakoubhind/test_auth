<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Document</title>
</head>
@if(Auth::check() && Auth::user()->role_id == 2 )
<body>

    <div class="bg-video-wrap">
        <video src="/img/vidéo.mp4" loop muted autoplay>
        </video>
        <div class="overlay">
        </div>
        <div class="container header_vidéo ">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#"><img src="/img/YANSOFT-logo.png" class="logo" alt="YANSOFT"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav menu">
                        <li class="nav-item active">
                            <a class="nav-link" href="/ACCUEIL.html">Accueil </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                La société
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/ess.html">L'essentiel</a>
                                <a class="dropdown-item" href="/qui_sommes-nous.html">Qui somes-nous?</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Developpement
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Carières</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Design
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Marketing
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Support/FAQ
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="contact-nav"><a class="nav-link" href="#">Contact</a></button>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <h1 class="h1-header">IT SOLUTIONS <br> & INNOVATION
        </h1>
    </div>
    <header class="wave-bottom">
        <div class="digital-overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="/img/App-iphone-odoo.png" class="img-digital" alt="">
                </div>
                <div class="col-md-7 digital-par">
                    <h1 class="h1-digital mb-5">Le monde est digital</h1>
                    <h4 class="h4-digital mb1">L'êtes-vous aussi?</h4>
                    <button type="button" class="btn-digital mb-1 btn">Connectez-vous</button>
                </div>
            </div>

        </div>
        </div>
    </header>
    <div class="row col-md-12 section-offers mt-5">
        <div class="col-md-7 offers">
            <i class="fa fa-code icon-code"></i>
            <h2 class="title-offers">Design élégant, <br> Technologies modernes.</h2>
            <div class="elementor-widget-container">
                <p class="desc-offers">Nous offrons à nos clients une expertise dans l'ingénierie des <br> logiciels et
                    applications spécifiques 100% Open Source.</p>
            </div>
        </div>
        <div class="col-md-5 section-img mt-5">
            <img src="/img/desig-elegant.jpg" class="img-offers" alt="">

        </div>
    </div>

  






    <link rel="stylesheet" href="https://i.icomoon.io/public/3db54d4e03/GarageSaleApp/style.css">

    <div class="title">
        <div class="dynamic-title cd-headline clip is-full-width">
            <span>Une vision&nbsp;</span>
            <span class="cd-words-wrapper">

                <b class="is-visible"> a&nbsp;<span class="gold-title">FUTURISTE.</span></b>
                <b> a&nbsp;<span class="gold-title">d'EXCELLENCE.</span></b>
                <b>a&nbsp;<span class="gold-title">d'EXPERT.</span></b>
            </span>
        </div>

      
        <div class="container">
            <div class="boxes">
                <div class="box all ServiceBox">
                    <i class="fa fa-code" aria-hidden="true"></i>
                    <br>
                    Faisabilité <br>
                    Lors de notre première rencontre, nous étudions les process de votre projet afin d'optimiser la
                    faisabilité
                </div>
                <div class="box all star"><i class="fa fa-star-o" aria-hidden="true"></i><br>
                    Expertise <br />
                    WEELITE accompagne ses clients pour choisir la solution la plus optimale et adaptée à votre projet
                </div>
                <div class="box all seo">
                    <i class="fa fa-book" aria-hidden="true"></i><br> Ingénierie <br />
                    Parce que chaque projet vise l'excellence, nous nous appuyons sur une méthode agile
                </div>
            </div>
        </div>

        <!-- ************slider -->
    </div>
    <script></script>
    <div class="wave-section">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="d-flex">
                            <div class="slide-heading mt-5">
                                <h1>Ingénierie IT</h1>
                                <p> La clé de voûte d’un projet réussi est la robustesse et l’efficacité de ses
                                    fondations :
                                    le code lui-même. Nos ingénieurs IT créent des expériences numériques en s’appuyant
                                    sur
                                    des technologies modernes et performantes qui répondent à tous les besoins d’une
                                    start-up et d’une entreprise.</p>
                            </div>
                            <img class="d-block " src="/img/ingenieur.png" alt="First slide">
                        </div>
                    </div>

                </div>
                <div class="carousel-item ">
                    <div class="container">
                        <div class="d-flex">
                            <div class="slide-heading mt-5">
                                <h1>Design & Prototype</h1>
                                <p> Parmi les premières étapes, notre équipe de conception veillera à visualiser votre
                                    idée
                                    dans
                                    une projection de votre interface utilisateur. Cela passe par la création d’une
                                    maquette
                                    élaborée vous permettant d’accéder à des investisseurs et/ou de présenter la
                                    conception
                                    d’un
                                    prototype intégré orienté UX à votre hiérarchie.</p>
                            </div>
                            <img class="d-block " src="/img/slide-services-1.png" alt="First slide">
                        </div>
                    </div>

                </div>
                <div class="carousel-item ">
                    <div class="container">
                        <div class="d-flex">
                            <div class="slide-heading mt-5">
                                <h1>Découvert & Stratégie de votre projet</h1>
                                <p> Découverte du projet pour s’assurer que l’environnement technique, les attentes
                                    fonctionnelles et le récit utilisateur est bien défini et prêts pour « une cuisson
                                    efficace dans notre four ». Nos consultants chevronnés élaborent d’excellentes
                                    alternatives et transforment les fonctionnalités qui vous aident à vous préparer
                                    pour la solution idéale.</p>
                            </div>
                            <img class="d-block " src="/img/brainstorming.png" alt="First slide">
                        </div>
                    </div>

                </div>
                <div class="carousel-item ">
                    <div class="container">
                        <div class="d-flex">
                            <div class="slide-heading mt-5">
                                <h1>Déploiement</h1>
                                <p>Un processus rigoureux et agile de contrôle et de test précèdent le lancement des
                                    versions alpha et bêta. Les séances de démonstration dans nos bureaux ou en confcall
                                    offrent une perspective en direct du concept final. Notre programme WeeLaunch offre
                                    la consultation marketing aux clients pour le lancement après effets.</p>
                            </div>
                            <img class="d-block " src="/img/slide-services-4.png" alt="First slide">
                        </div>
                    </div>

                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <section class="wrapper text-center mt-5">
            <div class="container-fostrap">
                <div>
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 ">
                                <div class="card text-center card1">

                                    <div class="card-content">
                                        <img width="90" height="90"
                                            src="https://weelite.ma/wp-content/uploads/2020/05/icone-mobile.png"
                                            class=" mt-4 mb-4 attachment-large size-large" alt="" loading="lazy"
                                            srcset="https://weelite.ma/wp-content/uploads/2020/05/icone-mobile.png 90w, https://weelite.ma/wp-content/uploads/2020/05/icone-mobile-80x80.png 80w"
                                            sizes="(max-width: 90px) 100vw, 90px">
                                        <h3 class="icon-box-title">
                                            <span>Mobile</span>
                                        </h3>
                                        <p class="icon-box-description">Faites l’expérience de produits parfaitement
                                            conçus et
                                            sécurisés spécialement pour mobile en s’appuyant sur des langages de
                                            développement spécialisés pour
                                            iOS et Android avec des leaders perspicaces et des ingénieurs expérimentés.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4  ">
                                <div class="card text-center card2">

                                    <div class="card-content">
                                        <img width="90" height="90"
                                            src="https://weelite.ma/wp-content/uploads/2020/05/icone-odoo.png"
                                            class="attachment-large size-large mt-4 mb-4" alt="" loading="lazy"
                                            srcset="https://weelite.ma/wp-content/uploads/2020/05/icone-odoo.png 90w, https://weelite.ma/wp-content/uploads/2020/05/icone-odoo-80x80.png 80w"
                                            sizes="(max-width: 90px) 100vw, 90px">
                                        <h3 class="icon-box-title">
                                            <span>Odoo</span>
                                        </h3>
                                        <p class="icon-box-description">Les applications Odoo offrent une réponse aux
                                            besoins de votre
                                            entreprise grâce à notre solution unique, rentable et modulaire :
                                            concentrez-vous sur une
                                            seule technologie.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 ">
                                <div class="card card3">
                                    <div class="card-content">
                                        <img width="90" height="90"
                                            src="https://weelite.ma/wp-content/uploads/2020/05/web.png"
                                            class="attachment-large size-large mt-4 mb-4" alt="" loading="lazy"
                                            srcset="https://weelite.ma/wp-content/uploads/2020/05/web.png 90w, https://weelite.ma/wp-content/uploads/2020/05/web-80x80.png 80w"
                                            sizes="(max-width: 90px) 100vw, 90px">
                                        <h3 class="icon-box-title">
                                            <span>Web</span>
                                        </h3>
                                        <p class="icon-box-description">Développer une application web, un site
                                            E-commerce, ou un site web
                                            vitrine s'appuyant sur les dernières technologies du web : PHP, HTML5, Ruby,
                                            WordPress, .NET
                                            ainsi que Magento pour eCommerce.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper text-center mt-5 mb-5">
            <div class="container-fostrap">
                <div>
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 ">
                                <div class="card text-center card4">

                                    <div class="card-content">
                                        <img width="90" height="90"
                                            src="https://weelite.ma/wp-content/uploads/2020/05/icone-design.png"
                                            class="mt-3 mb-3 attachment-large size-large" alt="" loading="lazy"
                                            srcset="https://weelite.ma/wp-content/uploads/2020/05/icone-design.png 90w, https://weelite.ma/wp-content/uploads/2020/05/icone-design-80x80.png 80w"
                                            sizes="(max-width: 90px) 100vw, 90px">
                                        <h3 class="icon-box-title">
                                            <span>Design</span>
                                        </h3>
                                        <p class="icon-box-description">
                                            Avec un design et une conception de première classe, nous élaborons une
                                            stratégie UX minutieusement planifiée assurant ainsi à utilisateur final une
                                            grande unique.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4  ">
                                <div class="card text-center card2">

                                    <div class="card-content">
                                        <img width="90" height="90"
                                            src="https://weelite.ma/wp-content/uploads/2020/05/icone-marketing.png"
                                            class="mt-3 mb-3 attachment-large size-large" alt="" loading="lazy"
                                            srcset="https://weelite.ma/wp-content/uploads/2020/05/icone-marketing.png 90w, https://weelite.ma/wp-content/uploads/2020/05/icone-marketing-80x80.png 80w"
                                            sizes="(max-width: 90px) 100vw, 90px">
                                        <h3 class="icon-box-title">
                                            <span>Marketing</span>
                                        </h3>
                                        <p class="icon-box-description">
                                            Le marketing s’appuie sur des stratégies fondamentales assurant la
                                            croissance de votre entreprise. Nos services marketing vous offre une plus
                                            grande visibilité et une portée accrue sur l’ensemble de vos actions.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 ">
                                <div class="card card4">
                                    <div class="card-content">
                                        <img width="90" height="90"
                                            src="https://weelite.ma/wp-content/uploads/2020/05/icone-technologie.png"
                                            class="mt-3 mb-3 attachment-large size-large" alt="" loading="lazy"
                                            srcset="https://weelite.ma/wp-content/uploads/2020/05/icone-technologie.png 90w, https://weelite.ma/wp-content/uploads/2020/05/icone-technologie-80x80.png 80w"
                                            sizes="(max-width: 90px) 100vw, 90px">
                                        <h3 class="icon-box-title">
                                            <span>Technologies</span>
                                        </h3>
                                        <p class="icon-box-description">Appuyez-vous sur des technologies de pointe et
                                            une équipe « new-age » offrant agilité à votre entreprise tout en
                                            s’intégrant au cœur des processus de développement des entreprises de
                                            demain.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
   
    <!-- Site footer -->
    <footer>
        <div class="container">
            <div class="sec aboutus">
                <h2>Qui sommes nous ?</h2>
                <p>
                    S’appuyant sur 15 années d’expériences dans la technologie et l’innovation Web, nous sommes
                    spécialisés dans la transformation digitale des TPE/PME et offrons à nos clients une expertise dans
                    le développement et l’intégration de solutions technologiques modernes.
                </p>
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="sec quickLinks">
                <h2>Liens rapides</h2>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">La société</a></li>
                    <li><a href="#">Développement</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Support/FAQ</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="sec contact">
                <h2>Contact</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span>17, Rue Abou Abbas<br />
                            Jeraoui, N°5, Quartier De La Gare-<br /> Casablanca</span>

                    </li>
                    <li>
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <p><a href="tel:12345678900">+1 2345678900</a></p>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <p><a href="mailto:contact@yansoft.ma">contact@yansoft.ma</a></p>
                    </li>
                </ul>
            </div>
        </div>

    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
@else
<div class="alert alert-danger" role="alert">
    vous n'êtes pas autorisé pour cette opération
  </div>
  
@endif

</html>