<?php

/* 
    Template Name: Expériences
*/

//------------------------------- HEADER ---------------------------
get_header();

$profile= get_field('profile');
$value= get_field('value');

?>

<article class="profile">
    <img src="<?php echo($profile["picture"]["url"]); ?>"
    alt="" >
    <h1><?php echo($profile['title']); ?></h1>
    <p><?php echo($profile['text']); ?></p>
</article>

<article class="value">
    <h2><?php echo($value['title']); ?></h2>
    <div class="grid">
    <?php foreach($value['values'] as $values): ?>
        <div class="grid-art"><img alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo($values['icon_values']['filename']); ?>" alt="">
            <h3><?php echo($values['title_values']); ?></h3>
            <p><?php echo($values['text_values']); ?></p>
        </div>
    <?php endforeach; ?>
    </div>
</article>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>