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
        <form method="post" action="">
        <div class="grid-form">
                <div>
                    <label for="first_name"><?php echo($form['first_name']); ?>:</label>
                    <input type="text" name="first_name" placeholder="<?php echo($form['first_name']); ?>">
                </div>
                <div>
                    <label for="name"><?php echo($form['name']); ?>:</label>
                    <input type="text" name="name" placeholder="<?php echo($form['name']); ?>">
                </div>
                <div>
                    <label for="email"><?php echo($form['email']); ?>:</label>
                    <input type="text" name="email" placeholder="<?php echo($form['email']); ?>">
                </div>
                <div>
                    <label for="phone"><?php echo($form['phone']); ?>:</label>
                    <input type="text" name="phone" placeholder="<?php echo($form['phone']); ?>">
                </div>
                <div>
                    <label for="society"><?php echo($form['society']); ?>:</label>
                    <input type="text" name="society" placeholder="<?php echo($form['society']); ?>">
                </div>
                <div>
                    <label for="function"><?php echo($form['function']); ?></label>
                    <input type="text" name="function" placeholder="<?php echo($form['function']); ?>">
                </div>
            </div>
            <div class="form-desc">
                <label for="message"><?php echo($form['message']); ?></label>
                <input type="text" name="message" placeholder="<?php echo($form['message']); ?>">
                
                <h5><?php echo($form['confidentiality']); ?></h5>
                <button class="button"><?php echo($form['send']); ?></button>
            </div>
        </form>
    </section>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>