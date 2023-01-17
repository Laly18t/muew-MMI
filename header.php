<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@1.5.7/dist/lottie-player.js"></script>
    <title>Muew</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <a href="muew/accueil"><img src="<?php echo get_template_directory_uri(); ?>/images/Muew.png" alt="muew_logo"></a>
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
                        <a href="startseite">DE</a>
                        <a href="muew/dom">POL</a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/down.svg" alt="">
            </div>
    </header>

    <div class="btn-CTA">
    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/calendar.svg" alt=""><p><?php echo($header['rdv']); ?></p></a></div>