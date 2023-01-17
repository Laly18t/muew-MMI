<?php

//------------------------------- HEADER ---------------------------
get_header();

$not_found= get_field('not_found');
?>


<div class="404">
    <lottie-player autoplay loop mode="normal" src="<?php echo get_template_directory_uri(); ?>/components/404.json" style="width: 620px">
    </lottie-player>
    <p><?php echo($not_found['not_found']); ?></p>
</div>

</body>

</html>