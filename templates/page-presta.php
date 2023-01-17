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
        <img src="<?php echo get_template_directory_uri(); ?>/images/Icone_Acc.svg" alt="Icone ampoule">
        <h1><?php echo($explanation['title']); ?></h1>
        <article class="explanation">
            <p><?php echo($explanation['text']); ?></p>
        </article>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/down.svg" alt="Fleche vers le bas"></a>
    </section>
    
    <section class="s2_acc">
        <?php if(!empty($steps)): ?>
            <h2><?php echo($steps['title_steps']); ?></h2>
            <article>
                <ul>
                    <li> <div class="rond"> <div class="trait"></div> </div> </li>
                    <?php foreach($steps['list_steps'] as $line): ?>
                        <li><div class="rond"> <img src="<?php echo get_template_directory_uri(); ?>/images/Rond.svg" alt=""> <div class="trait"></div> </div><?php echo($line['line']); ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
        <?php endif; ?>
    </section>
    <section>
        <?php if(!empty($trainings)): ?>
            <article>
                <h2><?php echo($trainings['title']); ?></h2>
                <img src="<?php echo($trainings['schema']['url']); ?>" alt="">
                <ul>
                    <li><?php echo($trainings['steps']); ?></li>
                    <li><?php echo($trainings['steps_2']); ?></li>
                    <li><?php echo($trainings['steps_3']); ?></li>
                </ul>
                <p><?php echo($trainings['explanation_steps']); ?></p>
            </article>
        <?php endif; ?>

        <?php if(!empty($skill['title'])): ?>
            <article>
                <h3><?php echo($skill['title']); ?></h3>
                <p><?php echo($skill['text']); ?></p>
                <div class="skill_logo">
                    <?php foreach($skill['logo_skill'] as $logo): ?>
                        <img src="<?php echo($logo['logo']['url']); ?>">
                    <?php endforeach; ?>
                </div>
            </article>
        <?php endif; ?>
    </section>
    
</div>
<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>