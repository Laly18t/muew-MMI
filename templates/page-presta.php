<?php

/* 
    Template Name: Prestation
*/

//------------------------------- HEADER ---------------------------
get_header();

$explanation= get_field('explanation');
$steps= get_field('steps');
$trainings= get_field('trainings');
$skill = get_field('skill');

?>

<div class="wrap">
    <section class="s1_acc">
        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo($explanation['icon']['filename']); ?>" alt="Icone ampoule">
        <h1><?php echo($explanation['title']); ?></h1>
        <article class="explanation">
            <p><?php echo($explanation['text']); ?></p>
        </article>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/down-vert.svg" alt="Fleche vers le bas"></a>
    </section>
    
    <?php if(!empty($steps['title_steps'])): ?>
        <section class="s2_acc">
            <h2><?php echo($steps['title_steps']); ?></h2>
            <article>
                <ul>
                    <li> <div class="rond"> <div class="trait"></div> </div> </li>
                    <?php foreach($steps['list_steps'] as $line): ?>
                        <li><div class="rond"> <img src="<?php echo get_template_directory_uri(); ?>/images/Rond.svg" alt=""> <div class="trait"></div> </div><?php echo($line['line']); ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
        </section>
    <?php endif; ?>
    <?php if(!empty($trainings['title'])): ?>
        <section class="s2_form">
            <h2><?php echo($trainings['title']); ?></h2>
            <article>
                <img src="<?php echo($trainings['schema']['url']); ?>" alt="">
                <ul>
                    <li><?php echo($trainings['steps']); ?></li>
                    <li><?php echo($trainings['steps_2']); ?></li>
                    <li><?php echo($trainings['steps_3']); ?></li>
                </ul>
            </article>
            <p><?php echo($trainings['explanation_steps']); ?></p>
        </section>
    <?php endif; ?>
    <?php if(!empty($skill['title'])): ?>
        <section class="s3_form">
            <h2><?php echo($skill['title']); ?></h2>
            <article>
                <p><?php echo($skill['text']); ?></p>
            </article>
            <article>
                <?php foreach($skill['logo_skill'] as $logo): ?>
                    <img src="<?php echo($logo['logo']['url']); ?>">
                <?php endforeach; ?>
            </article>
        </section>
    <?php endif; ?>
</div>
<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>