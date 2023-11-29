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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_estudo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[O*C*]`T5&5.SHFnc2?^ /ljaoDD<Qvp_PIB4oCID?5RyFXmWUE< 8{#]WQJ[:WO' );
define( 'SECURE_AUTH_KEY',  '=?w!=LQMT09p5R.]kcbWjAy.$fO/aDws-dT_zwD1US-uGK}Xd$F!;1lIky*Z*`@r' );
define( 'LOGGED_IN_KEY',    'O]aXY&To~A%7(2W{-|Eqgy04>&v5PX|$ab_/ndfD6R^G%HxWGcS#a;vU!g>sfpjN' );
define( 'NONCE_KEY',        ':X&T!bP_Bx8L7_1jr9f<D|M!n_bkO*X}MC}Qu-B;[iMr@&z$b:W >t@?eAGvFw):' );
define( 'AUTH_SALT',        'camo!CkU(H9a]H&0PI`bEP}T{(PdTcJOd0bC%*r6tBkdlG-}({B9wUej+<r6fQb6' );
define( 'SECURE_AUTH_SALT', '+5i2>);2,2>]<TjZY^pd4eO/^V$Tgx@fW>9(k,aTl7/c40.Zd77>>3W2;Ic h0TE' );
define( 'LOGGED_IN_SALT',   '7 sHxg_2+e:U#>cbfH,a~ n%Y)u-( 8^>D;j+dQUy!i7:t!dG+o0uFo1i`N/>7DW' );
define( 'NONCE_SALT',       '+E@>D}gN(ADFmKH7lg;zrH:@8]KGXn<BE9MQVtALw[q89ze6)Pq*U=x;=R(TvP]A' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
