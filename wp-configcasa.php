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
define( 'DB_NAME', 'aluraintercambio' );

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
define( 'AUTH_KEY',         '4!3n4vX;bq+C1Z =i4$0Z(R<7.mB0eV9%y}f2jm)-l:V-lUUW?y7*5%.RyDM:?ju' );
define( 'SECURE_AUTH_KEY',  'a:xqp^;U$Rc),%dS0WDV:<#QhyHuh0XnnG0MyNhW)^ _khZr;2tRzw:$lHE= m/y' );
define( 'LOGGED_IN_KEY',    '<<eV LwGI}U-ak2sP^7yH{]J[Sscw=Z7KU]L19T5LpxYbIFL3/(24A.[,O-,`G8^' );
define( 'NONCE_KEY',        '~ail-U/[QX0u#ci0UQ=0mlA8B77MMMasVwMGK(@[J=G5l4_`c8wrIp UiA3dmC*X' );
define( 'AUTH_SALT',        'j,8{Z^XsME4q 9<$Q]Rd~;=]2rQGt`EaNGkxI&#{Zy*MO}9?@UO4;t%KaADu)lM~' );
define( 'SECURE_AUTH_SALT', '|M[fTEb&m} Hm8+3/dAr[7eRG2QM*1fD?j[!>j?09d,|8uWk?,oEivHWV}Av.9tu' );
define( 'LOGGED_IN_SALT',   'ah={?w2dl|8fqT=TU>GM?|abv1ZUy:Qz=f4z.Ntn;4{1s$f;C/JJb9+7mjRd1[#N' );
define( 'NONCE_SALT',       'J,OW(o{4u-)1%B!R!p4Q#FcaXB_I*OjdC^O=bLS5kHUJf$Q~_&S;%qekD0(Vr2Ml' );

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
