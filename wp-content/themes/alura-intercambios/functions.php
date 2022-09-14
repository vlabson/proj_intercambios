<?php
/**
* este arquivo function serve e foi criado para que possamos ensinar ao 
* projeto do WP quais funcionalidades estaremos necessitando usar.
*
*/

/* esta primera funcao foi criada para que possamos chamar uma função nativa do WP.
   ESTA FUNCAO (add_theme_support) ADCIONA VARIOS POSSIBILIDADES DE RECURSOS NO MENU DO ADMIN WORDPRESS(WP). */
function alura_inter_add_recurso(){
    /*esta chamada esta sendo exclusiva para ter a disponibilidade de inserir logo marca*/
    add_theme_support('custom-logo');
    /*esta chamada esta sendo exclusiva para da suporte de uma chamada de imagem e poder inserir no projeto*/
    add_theme_support('post-thumbnails');

}
/* codigo abaixo engancha a funcao acima fazendo ela iniciar juntamente com o codigo do WP, sem precisar de uma chamada da função dentro do projeto*/
add_action('after_setup_theme','alura_inter_add_recurso'); 


/* 
* esta funcao ensina ao WP que precisaremos e que queremos que fique disponivel NO menu
* admim a possibilidade de inserir MENU no projeto
*/
function alura_inter_registro_menu(){

    register_nav_menu(
        location:'menu-navegacao',
        description:'Menu Navegação'
    );
}
/* codigo abaixo engancha a funcao acima fazendo ela iniciar juntamente com o codigo do WP,sem precisar de uma chamada da função dentro do projeto*/
add_action('init','alura_inter_registro_menu');


?>