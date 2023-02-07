<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@1.5.7/dist/lottie-player.js"></script>
    <meta name="google-site-verification" content="_BgA0PwSgF5O_17ye03zLYW7nSiKUcwUy1uIucqI2bw" />
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/muew-logo.png">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>Muew</title>
    <?php wp_head();
    
        $rdv= get_field('rdv');
        $home= get_field('home');
    ?>
</head>

<body>
    <header>
        <a href="<?php echo($home); ?>"><img class="muew-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_baseline.svg" alt="muew_logo"></a>
        <nav>
            <?php 
                wp_nav_menu(array(
                    'menu' => 'main_menu',
                    'container_class' => 'NavContainer',
                    'menu_class' => 'NavList'
                ))
            ?>
        </nav>
        <div class="deroulant">
                <div class="langage">
                    <a href="muew/accueil">FR</a>
                    <div>
                        <a href="muew/startseite">DE</a>
                        <a href="muew/dom">PL</a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/down.svg" alt="">
            </div>
    </header>

    <div class="btn-CTA">
    <a href="https://calendly.com/muew-monika"><img src="<?php echo get_template_directory_uri(); ?>/images/calendar.svg" alt=""><p><?php echo($rdv); ?></p></a></div>