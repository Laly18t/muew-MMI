<?php

/* 
    Template Name: Accueil
*/

//------------------------------- HEADER ---------------------------
get_header();

// echo( $post->post_content);

?>

<h1><?php echo (get_the_title()); ?></h1> 

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>