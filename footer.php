<?php 

/* 
    Template Name: BasDePage
*/


$list_left= get_field('list_left');
$list_right= get_field('list_right');
$mentions_legales= get_field('mentions_legales');
$mention_link= get_field('mention_link');
?>
   
   <footer>
        <div>
            <ul class="footer-menu">
                <?php foreach($list_left as $line): ?>
                    <li><a href="muew/<?php echo($line['link']); ?>/"><?php echo($line['line']); ?></a></li>
                <?php endforeach; ?>
            </ul>
            <div class="deroulant">
                <div class="langage">
                    <a href="muew/accueil">FR</a>
                    <div>
                        <a href="startseite">DE</a>
                        <a href="muew/dom">POL</a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/down.svg" alt="">
            </div>
            <div>
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/muew-logo.png" alt="">
                <p><?php echo($list_right['address']); ?></p>
                <div class="align">
                    <p><?php echo($list_right['phone']); ?></p>
                    <a href="<?php echo($list_right['linkedin']); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt=""></a>
                </div>
            </div>
        </div>
        <ul>
            <li><a href="<?php echo($mention_link); ?>"><?php echo($mentions_legales); ?></a></li>
            <li>|</li>
            <p>Copyright &copy; Muew 2023</p>
        </ul>
    </footer>

    </body>
</html>