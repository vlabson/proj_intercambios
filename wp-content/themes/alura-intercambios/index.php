
<?php
/* aqui chamamos um codigo externo com todo cabeçalho do projeto */
require_once 'header.php'; 

if(have_posts()):
    while(have_posts()):
        the_post();
        the_post_thumbnail();
        the_title();
        the_content();
    endwhile;
endif;


/* aqui chamamos um codigo externo com todo footer do projeto */
require_once 'footer.php';
?>