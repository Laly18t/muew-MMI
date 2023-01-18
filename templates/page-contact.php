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
                <p><?php echo($form['calendar']['text']); ?></p>
                <a class="button" href=""><img src="<?php echo get_template_directory_uri(); ?>/images/calendar.svg" alt=""><?php echo($form['calendar']['cta']); ?></a>
        </div>
    </section>

    <!-- section formulaire de contacte -->
    <section>
        <div class="grid-form">
            <div>
                <p><?php echo($form['first_name']); ?></p>
                <form method="post"></form>
            </div>
            <div>
                <p><?php echo($form['name']); ?></p>
                <form method="post"></form>
            </div>
            <div>
                <p><?php echo($form['email']); ?></p>
                <form method="post"></form>
            </div>
            <div>
                <p><?php echo($form['phone']); ?></p>
                <form method="post"></form>
            </div>
            <div>
                <p><?php echo($form['society']); ?></p>
                <form method="post"></form>
            </div>
            <div>
                <p><?php echo($form['function']); ?></p>
                <form method="post"></form>
            </div>
        </div>
        <div class="form-desc">
            <p><?php echo($form['message']); ?></p>
            <form method="post"></form>
            <h5><?php echo($form['confidentiality']); ?></h5>
            <button class="button"><?php echo($form['send']); ?></button>
        </div>
    </section>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>