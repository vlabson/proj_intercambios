<?php
/**
* este arquivo function serve e foi criado para que possamos ensinar ao 
* projeto do WP quais funcionalidades estaremos necessitando usar.
*
*/

/* 
* esta primera funcao ensina ao WP que precisaremos e que queremos que fique disponivel no menu
* admim a possibilidade de inserir logo no projeto
*
*/
function alura_inter_add_recurso(){

    add_theme_support('custom-logo');

}
add_action('after_setup_theme','alura_inter_add_recurso');


function alura_inter_registro_menu(){

    register_nav_menu(
        location:'menu-navegacao',
        description:'Menu Navegação'
    );
}

add_action('init','alura_inter_registro_menu');


?>