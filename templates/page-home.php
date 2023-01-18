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

<section class="home">
    <article class="landing">
        <div class="top">
            <div>
                <h1><?php echo($introduction['title']); ?></h1>
                <p><?php echo($introduction['list_title']); ?></p>
                <ul>
                    <?php foreach($introduction['list'] as $line): ?>
                        <li><?php echo($line['line']); ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php if(!empty(get_field($image))) : ?>
                    <img src="<?php echo($image['image']['url']); ?>" >
                <?php endif; ?>
            </div>
            <lottie-player autoplay loop mode="normal" src="<?php echo get_template_directory_uri(); ?>/components/eco-circulaire.json" style="width: 620px">
            </lottie-player>
        </div>
    </article>

    <img src="<?php echo get_template_directory_uri(); ?>/images/down.svg" alt="">

    <article class="activity">
        <h2><?php echo($service['title']); ?></h2>
        <div class="grid">
            <?php foreach($service['activity'] as $activity): ?>
                <div class="grid-art">
                    <img src="<?php echo($activity['icon']['url']); ?>" alt="">
                    <h3><?php echo($activity['title_activity']); ?></h3>
                    <p><?php echo($activity['text_activity']); ?></p>
                    <a href="<?php echo($activity['link_page']); ?>"><?php echo($activity['lien_activity']); ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </article>

    <article class="line">
        <div class="creator">
            <img src="<?php echo($creator['image_creator']['url']); ?>" alt="portrait Monika" />
            <div class="portait">
                <h3><?php echo($creator['title_creator']); ?></h3>
                <p><?php echo($creator['text_creator']); ?></p>
                <a href="muew/experience" class="button"><?php echo($creator['link_creator']); ?></a>
            </div>
        </div>
    </article>

    <article class="temoignages">
        <h2><?php echo($testimony['title']); ?></h2>
        <?php foreach($testimony['testimony_base'] as $base): ?>
            <div>
                <h3><?php echo($base['name']); ?></h3>
                <p><?php echo($base['notice']); ?></p>
            </div>
        <?php endforeach; ?>
    </article>
</section>
<?php

//--------------------------- FOOTER ---------------------------
get_footer();

?>