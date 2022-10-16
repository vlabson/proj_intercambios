<?php

$estiloPagina = 'projetos.css';
require_once 'header.php';

if(have_posts()):
    while(have_posts()): the_post();
        the_post_thumbnail('post_thumbnail');
        the_title('<h1>','</h1>');
        the_content();
    endwhile;
endif;


require_once 'footer.php';

?>