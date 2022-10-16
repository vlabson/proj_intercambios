<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura_intercambios' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PbGmKl=&SYc.-@WY0] )(YcAEp`N8O4oo{}lh4b`N6X3VL>|9ce+9{8#,gl>3YN{' );
define( 'SECURE_AUTH_KEY',  'u}eXOtTf7l6n S_d%l7<UyS2$F-Y%`2UrR$qHN}Wd?C*4xVX>GF%}$@jMGjBD}Lw' );
define( 'LOGGED_IN_KEY',    'Y~,Xar0[Y3Zf?Q!k3%do,_uTBM]PJ^~pcd{4=<r@Bq9uJtZJB0*RK3@T*U`xSaum' );
define( 'NONCE_KEY',        't@u!<lA9`AvRF?i.|BMsp30!(^c)p#[EOF)taK>Ac*09Me.%7~Q)0C|,k*D^Iz]T' );
define( 'AUTH_SALT',        '{k~Jer#rD-oW^4 r$5%q+?aZoD@%{TlE9pQ</[ESw(2AeR^:0~|Ps=j$,!/b~Vg&' );
define( 'SECURE_AUTH_SALT', 'ww>F<ws,EO6S8a=b/?L~NjL 99@7[B=-KgZKMG1CRjf+H/[<$&/h_tGYiJwM.^OZ' );
define( 'LOGGED_IN_SALT',   '8vs-ekf&I%sC`miv[Ktpwowj@YjTgLjKIrZqDd&5#rFzGy25b6pso7A>S`sCoC8S' );
define( 'NONCE_SALT',       'CK )dRg|g-`AAWW3&]1~ .}5tx%.R,zM!F%OTPpZD9v|dfwrRV{Mu_r^Fw&WJ4}+' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
