<?php
$estiloPagina = 'sobre_nos.css';
/* aqui chamamos um codigo externo com todo cabeçalho do projeto */
require_once 'header.php'; 

if(have_posts()):

?>   

<main class="main-sobre-nos"> 
    <?php
        while(have_posts()): the_post();
        the_post_thumbnail('post-thumbnail',array('class' => 'imagem-sobre-nos')); /** funcao que mostra a imagem */
        echo '<div class="conteudo container-alura">';
            the_title('<h2>','</h2>');/** mostra o titulo */
            the_content(); /** mostra o conteudo */
            echo'</div>';
        endwhile;
    ?>
</main>

<?php

endif;

/* aqui chamamos um codigo externo com todo footer do projeto */
require_once 'footer.php';
?>