
<?php
/* 
    Template Name: Mention
*/

//------------------------------- HEADER ---------------------------
get_header();

$mention= get_field('mentions');
?>


<div class="s2_ment">
    <?php foreach($mention['paragraph'] as $paragraph): ?>
        <h2><?php echo($paragraph['title_paragraph']); ?></h2>
        <p><?php echo($paragraph['text_paragraph']); ?></p>
    <?php endforeach; ?>
</div>


<?php

//--------------------------- FOOTER ---------------------------
get_footer();

?>