
<?php
/* 
    Template Name: Error404
*/

//------------------------------- HEADER ---------------------------
get_header();

?>


<div class="error404">
    <lottie-player autoplay loop mode="normal" src="<?php echo get_template_directory_uri(); ?>/components/404.json" style="width: 620px">
    </lottie-player>
    <p>La page est introuvable</p>
    <p>Die von Ihnen gesuchte Seite wurde nicht gefunden</p>
    <p>Nie można znaleźć strony, której szukasz</p>
</div>

<?php

//--------------------------- FOOTER ---------------------------
get_footer();

?>