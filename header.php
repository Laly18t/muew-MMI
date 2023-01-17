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

<?php 
$langue = 'DE';
?>

<body>
    <header>
        <a href="muew/accueil"><img src="<?php echo get_template_directory_uri(); ?>/images/Muew.png" alt="muew_logo"></a>
        <nav>
            <ul>
                <?php if($langue=='FR'): ?>
                    <li><a href="muew/accompagnement-operationnel/">Accompagnement opérationnel</a></li>
                    <li><a href="muew/conseil/">Conseil</a></li>
                    <li><a href="muew/formation/">Formartion</a></li>
                    <li>|</li>
                    <li><a  href="muew/experience/">Mon expérience</a></li>
                    <li><a href="muew/contact/">Me contacter</a></li>

                <?php elseif($langue=='POL'): ?>
                    <li><a href="muew/accompagnement-operationnel/">Accompagnement opérationnel</a></li>
                    <li>|</li>
                    <li><a  href="muew/experience/">Mon expérience</a></li>
                    <li><a href="muew/contact/">Me contacter</a></li>

                <?php elseif($langue=='DE'): ?>
                    <li><a href="muew/accompagnement-operationnel/">Accompagnement opérationnel</a></li>
                    <li>|</li>
                    <li><a  href="muew/experience/">Mon expérience</a></li>
                    <li><a href="muew/contact/">Me contacter</a></li>

                <?php endif; ?>
            </ul>
        </nav>
        <div class="deroulant">
                <div class="langage">
                    <a href="?lang=fr"><?php echo $langue ?></a>
                    <div>
                        <a href="?lang=de">DE</a>
                        <a href="?lang=pol">POL</a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/down.svg" alt="">
            </div>
    </header>

    <div class="btn-CTA">
    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/calendar.svg" alt=""><p>Prendre RDV</p></a></div>