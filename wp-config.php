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
define( 'DB_NAME', 'proj-intercambios' );

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
define( 'AUTH_KEY',         'IW|Kx?v!;uV/By,+}*uld17EIuhpTz2CT=74^`@ES8@dT`L+dE+|)E<^Ih g9 u^' );
define( 'SECURE_AUTH_KEY',  '^yHu3VR_Gd~m,b05oY#3`%/gJ+|Bz/;E`Wm)I5|4?G?_K<#_E+{p2@9QUCkM#d.Y' );
define( 'LOGGED_IN_KEY',    'SCCDi7c$q*0q{B9O,||n4Lt#dV5V~A}D![)<I0Qj,DR4eF4oPBEx:-CfkT,d:q+R' );
define( 'NONCE_KEY',        '?.sSD}MG<=9kbtlu9kpAf=mIJC.tsUG:b?Zq ]ZSJWc6g:OcJ}yu?%(N6.REa7*O' );
define( 'AUTH_SALT',        'Pp%TeSWaz?s{O SRRu~B`Rm^NKZJs>&_]Q}{%>$}%(?ZR};*-}m0Z#YG31Jc2#qK' );
define( 'SECURE_AUTH_SALT', 'i}<s.Ps0_TZb:4lof*lxO| xhViin)KUOI5oakWhxw6 bqb418[vQZ1?FSRik^fe' );
define( 'LOGGED_IN_SALT',   '6x|T0t:2]2{q46E n9DRWxR*3FA.@#Vf]05l -,b6)^[7KOQ(nSiPzeR(ue>t {a' );
define( 'NONCE_SALT',       'RGO=fBxZ# _XSGd<%^Q~S]|1kUH4Xc0b:p oTSV[-FP+++wMtoTw2yclno?qigyA' );

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
