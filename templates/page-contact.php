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
    <section>
        <form method="post" action="">
        <div class="grid-form">
                <div>
                    <label for="first_name"><?php echo($form['first_name']); ?>:</label>
                    <input type="text" name="first_name" placeholder="">
                </div>
                <div>
                    <label for="name"><?php echo($form['name']); ?>:</label>
                    <input type="text" name="name" placeholder="">
                </div>
                <div>
                    <label for="email"><?php echo($form['email']); ?>:</label>
                    <input type="text" name="email" placeholder="">
                </div>
                <div>
                    <label for="phone"><?php echo($form['phone']); ?>:</label>
                    <input type="text" name="phone" placeholder="">
                </div>
                <div>
                    <label for="society"><?php echo($form['society']); ?>:</label>
                    <input type="text" name="society" placeholder="">
                </div>
                <div>
                    <label for="function"><?php echo($form['function']); ?>:</label>
                    <input type="text" name="function" placeholder="">
                </div>
            </div>
            <div class="form-desc">
                <label for="message"><?php echo($form['message']); ?></label>
                <input type="text" name="message" placeholder="">
                
                <h5><?php echo($form['confidentiality']); ?></h5>
                <button class="button"><?php echo($form['send']); ?></button>
            </div>
        </form>
    </section>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>