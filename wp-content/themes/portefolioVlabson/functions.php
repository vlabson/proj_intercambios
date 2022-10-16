<?php 

    /**funcao criada para incluir e disponibilizar para o usuario a ferramenta que cria post customizado */
    function site_portefolio_registrando_post_customizados(){
        register_post_type('destinos',
            array(
                'labels' => array('name' => 'Destinos'),
                'public' => true,
                'menu_position' => 0,
                'supports' => array('title','editor','thumbnail'),
                'menu_icon' => 'dashicons-admin-site'
            )
        );
    }
    add_action('init','site_portefolio_registrando_post_customizados');


    /** criando funcao para adcionar recursos diversos */
    function site_portefolio_adicionando_recursos_ao_tema(){
        /** função que adciona suportes ao tema */
        /** parametro que diponibiliza a inclusao de logomarca */
        add_theme_support(feature:'custom-logo');
        /** parametro que diponibiliza a inclusao de imagem na pagina */
        add_theme_support(feature:'post-thumbnails');
        
    

        

    };
    add_action('after_setup_theme','site_portefolio_adicionando_recursos_ao_tema');


    /** criando funcao para construir menu */
    function site_portefolio_registrando_menu(){
        register_nav_menu(
            location:'menu-navegacao', /** definindo ID do menu */
            description:'Menu Navegação' /** definindo nome de exibição no adm wp */
        );
    }
    add_action('init','site_portefolio_registrando_menu'); /** enganchando funcao ao iniciar o wp */



?>