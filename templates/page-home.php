<?php

/* 
    Template Name: Accueil
*/

//------------------------------- HEADER ---------------------------
get_header();

// echo( $post->post_content);

$introduction= get_field('introduction');
$service= get_field('service');
$creator= get_field('creator');
$testimony= get_field('testimony');
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
        <img src="<?php echo($image['image']['url']); ?>" >
<?php endif; ?>
</article>
<img src="../wp-content/themes/usmb/images/down.svg" alt="">
<article class="activity">
    <h2><?php echo($service['title']); ?></h2>
    <div class="competences">
        <?php foreach($service['activity'] as $activity): ?>
            <div class="competences-art"><img alt="" />
                <img src="<?php echo($activity['icon']['url']); ?>" alt="">
                <h3><?php echo($activity['title_activity']); ?></h3>
                <p><?php echo($activity['text_activity']); ?></p>
                <a><?php echo($activity['lien_activity']); ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</article>

<article class="creator">
    <img src="../wp-content/themes/usmb/images/monika.png" alt="" />
    <div class="portait">
        <h3><?php echo($creator['title_creator']); ?></h3>
        <p><?php echo($creator['text_creator']); ?></p>
        <a><?php echo($creator['link_creator']); ?></a>
    </div>
</article>

<article>
    <h3><?php echo($testimony['title']); ?></h3>
    <?php foreach($testimony['testimony_base'] as $base): ?>
        <div>
            <h3><?php echo($base['name']); ?></h3>
            <p><?php echo($base['notice']); ?></p>
        </div>
    <?php endforeach; ?>
</article>

<?php

//--------------------------- FOOTER ---------------------------
get_footer();

?>