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
define( 'DB_NAME', 'jornada-viagens' );

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
define( 'AUTH_KEY',         'j*Q}.ni)7zTr~D(>*JME,_P6]mZjSYZMn/1,DLh`_FdA85(8g`:*ATawtb9_q;!+' );
define( 'SECURE_AUTH_KEY',  'IB<T@e8N.-.rx=vzHllXS2TVf8WiCJG;4Yz9Z|pd?1kt50+.;#f)FYZLvN&4&vhq' );
define( 'LOGGED_IN_KEY',    'uG=*Ic<Dtf<)wZwv_+yg>4^061mA!~wSf9(3JM;0r]^v<fD-35&#[cgNsxBnx5gG' );
define( 'NONCE_KEY',        'YYVcw.E`ks%wXxQ{H[7;&.d^(M]{Y`tUf#y3cVjIC$J{q&5&E%@jbk$duI7G~kf+' );
define( 'AUTH_SALT',        '76)A6`WwUF25:zD1mtnm;%|?40[G@lF#9=:b[nOp][2!w3Bl}b6qQVMJeo6fQzW1' );
define( 'SECURE_AUTH_SALT', 'KEvu?Yku:5dvG5BW/(+L*-=;:v4k{B9t3%XYO1/VI!s$Nju~HKoB$sLc2[(!Ak0 ' );
define( 'LOGGED_IN_SALT',   '=HTw*{w^Teb^u.V[n2V]6-GS6hom|sQX/(g_}96*o9mr8A@vWBe>l;bjG` LuYUD' );
define( 'NONCE_SALT',       'h8YY!bRW4X[Fr]%U.lDmBX{RU3mz~zq6~d($i]LrL3bx3=5k6grV1&Wg[nOO{at;' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

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
