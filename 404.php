<?php

//------------------------------- HEADER ---------------------------
get_header();

$not_found= get_field('not_found');
?>
<div class="404">
    <img src="" alt="">
    <p><?php echo($not_found['not_found']); ?></p>
</div>

</body>

</html>