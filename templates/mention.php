
<?php
/* 
    Template Name: Mention
*/

//------------------------------- HEADER ---------------------------
get_header();

$mention= get_field('mention');
?>


<div class="mention">
    <?php foreach($mention['paragraph'] as $paragraph): ?>
        <h2><?php echo($paragraph['title_paragraph']); ?></h2>
        <pre><?php echo($paragraph['text_paragraph']); ?></pre>
    <?php endforeach; ?>
</div>


<?php

//--------------------------- FOOTER ---------------------------
get_footer();

?>