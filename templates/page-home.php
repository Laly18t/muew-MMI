<?php

/* 
    Template Name: Accueil
*/

//------------------------------- HEADER ---------------------------
get_header();

// echo( $post->post_content);

$introduction= get_field('introduction');
$image = get_field('image');
?>

<article class="landing">
    <h1><?php echo($introduction['title']); ?></h1>
    <p class="h1-def"><?php echo($introduction['subtitle']); ?></p>
    <p><?php echo($introduction['list_title']); ?></p>
    <ul>
        <?php foreach($introduction['list'] as $line): ?>
            <li><?php echo($line['line']); ?></li>
        <?php endforeach; ?>
    </ul>
    <?php if(!empty(get_field($image))) : ?>
        <img 
    src="<?php echo($image["sizes"]["medium_large"]); ?>" 
    height="<?php echo($image["sizes"]["medium_large-height"])?>" 
    width="<?php echo($image["sizes"]["medium_large-width"])?>"
    alt="<?php echo($image["alt"])?>" >
<?php endif; ?>
</article>
<?php

//--------------------------- FOOTER ---------------------------
get_footer();

?>