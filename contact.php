<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de contact d'Arlea</title>
    <meta content="ARLEA est une jeune entreprise située sur le Bassin d'Arcachon. Créé  au printemps 2020, Arlea est en contact avec les professionnels qui souhaitent une tenue adaptée à leurs besoins." name="description">
    <meta content="ARLEA est une jeune entreprise située sur le Bassin d'Arcachon. Simplifier les processus de personnalisation textile ainsi que satisfaire nos clients sont des valeurs qui nous tiennent particulièrement à cœur. 
        Afin de pouvoir s'adapter à chacune de vos demandes, nous vous proposons une vaste gamme de textiles et de couleurs.  " name="keywords">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/style.css">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="img/logo.jpg" alt="Image" class="img-fluide">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="menu">
                    <li class="nav-item">
                        <a class="nav-link nav-link-3 active" aria-current="page" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-1" href="#">Femme</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="hautfemmes.html">Les hauts</a></li>
                            <li><a href="basfemmes.html">Les bas</a></li>
                            <li><a href="accessoirefemmes.html">Accessoires</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-1" href="#">Homme</a>
                        <ul class="sub-menu">
                        <li>
                            <a href="hauthommes.html">Les hauts</a></li>
                            <li><a href="bashommes.html">Les bas</a></li>
                            <li><a href="accessoirehommes.html">Accessoires</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-1" href="#">Enfant</a>
                        <ul class="sub-menu">
                            <li>
                            <a href="hautenfants.html">Les hauts</a></li>
                            <li><a href="basenfants.html">Les bas</a></li>
                            <li><a href="accessoireenfants.html">Accessoires</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
            <div class="col-lg-4 col-12 mb-5">
                <h2 class="tm-text-primary mb-5">Contactez nous</h2>

                <?php
                if(
                    !empty($_POST['mail']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)&&
                    !empty($_POST['name']) &&
                    !empty($_POST['message'])
                ){
    
                    $headers = 'From: ' . $_POST['mail'] . "\r\n" .
                    'Reply-To: ' . $_POST['mail'] . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                    mail('contact@arlea-vetements.fr', 'Formulaire de contact', $_POST['message'], $headers);
                }elseif(!empty($_POST)){
                    echo '<div class="alert alert-danger">Vous n\'avez pas rempli tous les champs</div>';
                }
                if(empty($_post)){
                    $_POST = array(
                        'mail' => '',
                        'name' => '',
                        'message' => ''
                    );
                }
                ?>


                <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                <div class="form-group">
                  <label for="mail">Adresse email</label>
                  <input type="text" class="form-control" name="mail" id="mail" placeholder="nom@domain.com" value="<?php echo $_POST['mail']; ?>">
              </div>
              <div class="form-group">
                  <label for="name">Votre nom</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Nom" value="<?php echo $_POST['name']; ?>">
              </div>
              <div class="form-group">
                  <label for="message">Votre message</label>
                  <textarea name="message" id="message" class="form-control" placeholder="Saisissez votre message" rows="3"><?php echo $_POST['message']; ?></textarea>
              </div>

              <input type="submit" value="Envoyer" class="btn btn-primary">
          </fieldset>
      </form>
            </div>
            <div class="col-lg-4 col-12 mb-5">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5">Où nous trouver</h2>
                    <address class="tm-text-gray tm-mb-50">
                    8 avenue de la libération <br>
                    33138 Lanton
                    </address>
                    <ul class="tm-contacts">
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-envelope"></i>
                                Email: contact@arlea-vetements.fr
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-phone"></i>
                                Tel: +33 6.77.79.86.61 
                            </a>
                        </li>
                        <li>
                            <a href="https://www.arlea-vetements.fr/" class="tm-text-gray">
                                <i class="fas fa-globe"></i>
                                https://www.arlea-vetements.fr/
                            </a>
                        </li>
                    </ul>
                </div>                
            </div>
            <div class="col-lg-4 col-12">
                <h2 class="tm-text-primary mb-5">Nous localiser</h2>
                <!-- Map -->
                <div class="mapouter mb-4">
                    <div class="gmap-canvas">
                    <iframe width="100%" height="520" id="gmap-canvas"
                            src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2835.8850520385586!2d-1.0359500841395002!3d44.701545692025796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54bd641403b9fb%3A0xcf75a40f4fcdcb82!2s8%20Av.%20de%20la%20Lib%C3%A9ration%2C%2033138%20Lanton!5e0!3m2!1sfr!2sfr!4v1651645413012!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>               
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">En savoir plus</h3>
                    <p>Arlea  Créé  au printemps 2020. Arlea
                        
                        est désormais en contact régulier avec des professionnels de la santé, avec le secteur socio médical, ainsi que tous les autres professionnels qui souhaitent une tenue adaptée à leurs besoins.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Liens utiles</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="mentionslegales.html">Mentions légales</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="https://creationwebdesignboulenger.com">Contacter le webmaster</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Suivez nous !</h3>

                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://m.facebook.com/arleatextile/"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com/arlea_textile?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2022 Arlea. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="https://creationwebdesignboulenger.com" class="tm-text-gray" rel="sponsored" target="_parent">Boulenger Martine</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>