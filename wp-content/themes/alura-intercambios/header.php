<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo(show:'name'); ?></title>
    <?php 
        /* aqui chamamos uma função nativa do WP que são ganchos destinados ao cabeçalho e ao rodapé de um tema do WP 
        OBS: ele unido ao wp_head em suas devidas pastas fazem exibir o menu de controle do WP */
    wp_head(); 
    
    ?>
</head>
<body>

<?php

    /* função para trazer a LOGO */
    the_custom_logo();

    /* função recebe um array de argumento, esse array recebe a chave location 
        la da function.php e chama a rotina que cria o Menu na Head */
    wp_nav_menu( 
        array(
            'menu' => 'menu-navegacao'
        )
    );

    