<?php

/* 
    Template Name: Contact
*/

//------------------------------- HEADER ---------------------------
get_header();

$form= get_field('form');
?>

<!-- section prise de rdv -->
    <section class="formulaire">
        <h2><?php echo($form['title']); ?></h2>
        <div class="rdv">
                <p>Prenez rendez-vous directement avec nous</p>
                <button><i></i>Prendre RDV</button>
        </div>
    </section>

    <!-- section formulaire de contacte -->
    <section>
        <div class="grid-form">
            <div>
                <p>Prénom</p>
                <form method="post"></form>
            </div>
            <div>
                <p>Nom</p>
                <form method="post"></form>
            </div>
            <div>
                <p>E-mail</p>
                <form method="post"></form>
            </div>
            <div>
                <p>Tel</p>
                <form method="post"></form>
            </div>
            <div>
                <p>Société</p>
                <form method="post"></form>
            </div>
            <div>
                <p>Poste/Fonction</p>
                <form method="post"></form>
            </div>
        </div>
        <div class="form-desc">
            <p>Que pouvons-nous faire pour vous ?</p>
            <form method="post"></form>
            <h5>En envoyant ce formulaire, j'autorise ce site à conserver les données transmises.</h5>
            <button>Envoyer</button>
        </div>
    </section>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>