<?php

/* 
    Template Name: Expériences
*/

//------------------------------- HEADER ---------------------------
get_header();

$profile= get_field('profile');
$value= get_field('value');

?>

<article class="priofile">
    <img src="<?php echo($image["sizes"]["medium_large"]); ?>"
    alt="<?php echo($image["alt"])?>" >
    <h1><?php echo($profile['title']); ?></h1>
    <p><?php echo($profile['text']); ?></p>
</article>

<article class="value">
    <h2><?php echo($value['title']); ?></h2>
    <?php foreach($value['values_3'] as $values): ?>
        <div class="competences-art"><img alt="" />
            <img src="<?php echo($values['icon_values']); ?>" alt="">
            <h3><?php echo($values['title_values']); ?></h3>
            <p><?php echo($values['text_values']); ?></p>
        </div>
    <?php endforeach; ?>
</article>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>