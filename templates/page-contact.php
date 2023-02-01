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
                <a class="button" href="https://calendly.com/muew-monika"><img src="<?php echo get_template_directory_uri(); ?>/images/calendar-vert.svg" alt=""><?php echo($form['calendar']['cta']); ?></a>
        </div>
    </section>

    <!-- section formulaire de contact -->
    <section class="formulaire2">
        <?php echo do_shortcode('[wpforms id="' . $form['contact_id'] . '" title="false"]'); ?>

        <h5><?php echo($form['confidentiality']); ?></h5>
    </section>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>