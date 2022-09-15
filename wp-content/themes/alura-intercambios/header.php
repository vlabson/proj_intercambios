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

    <!--Aqui temos links de referencia onde chamamos os estilos das paginas.
        Importante mostrar que não usamos o caminho padrão estatico das pastas, usamos
        como referencia temos uma função do wordpress onde traz o mesmo resultado as pastas da raiz do projeto porem mantem 
        uma forma dinamica comunicação com o CMS-->
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/normalize.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() .  $estiloPagina ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/footer.css' ?>">

</head>

<!--  inserimos agora a funcao body class na tag body de forma OBRIGATORIA,  o proprio wordpress quem cria de forma automatica as classes 
dentro da tag que vai ser utilizada em todo o processo de desenvolvimento-->
<body <?php body_class(); ?> >

<header class="site-header">
    <div class="container-alura">
        <?php 
             /* função para trazer a LOGO */
            the_custom_logo();
        ?>
        <nav>
            <?php
            
                /* função recebe um array de argumentos e chama a rotina que cria o Menu na Head */
                wp_nav_menu( 
                    array(
                        'menu' => 'menu-navegacao',/*esse parametro do array recebe a chave location da function.php funcao que ensina ao WP a libera o serviço de menu*/
                        'menu_id' => 'menu-principal' /* esse paramentro recebe o id da estrutura HTML */
                    )
                );
            ?>

        </nav>
    </div>
</header>

    