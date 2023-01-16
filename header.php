<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muew</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <a href="muew/"><img src="../wp-content/themes/usmb/images/Muew.png" alt="muew_logo"></a>
        <nav>
            <ul>
                <li><a href="muew/accompagnement-operationnel/">Accompagnement Opérationnel</a></li>
                <li><a href="muew/conseil/">Conseil</a></li>
                <li><a href="muew/formation/">Formartion</a></li>
                <li>|</li>
                <li><a href="muew/experience/">Mon expérience</a></li>
                <li><a href="muew/contact/">Me contacter</a></li>
            </ul>
        </nav>
        <div class="deroulant">
                <div class="langage">
                    <a href="">FR</a>
                    <div>
                        <a href="">ALL</a>
                        <a href="">PL</a>
                    </div>
                </div>
                <img src="../wp-content/themes/usmb/images/down.svg" alt="">
            </div>
    </header>

    <!-- a enlever pour le rendu -->
    <h1><?php echo (get_the_title()); ?></h1> 
    <!-- a enlever pour le rendu -->

    <div class="btn-CTA">
    <a href=""><img src="../wp-content/themes/usmb/images/calendar.svg" alt=""><p>Prendre RDV</p></a></div>