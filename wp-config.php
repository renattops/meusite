<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wang');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}CI9c2e,S_E[Bb/zSSIW9-yZr7Cz0<3Vkc)X#$Mc8,;r1*:5y[4W`_%7>meKtmyM');
define('SECURE_AUTH_KEY',  'tv58X.5f=I;[1]TF+ODdPiO1%Uwr5M^.tX/p4LfY pt*n~c*)}=x}Da!]m$;E8)u');
define('LOGGED_IN_KEY',    '>r}th$W:3Ppce6-O)Rhcxwq&M([scO)+<PyXkSvNAOT9;#W3XQ[zNy<()M;4Fz4~');
define('NONCE_KEY',        'a:l YDv^0zFN*);HKYh~P$3x{%MO$`?`=@[j_-@9i]q2_fVd7:Kl9AlvlAXXSosf');
define('AUTH_SALT',        'J#7!W1-0Z[}{[yZQi~s|w=k6K3J]bpe|P3~Q;W)n)i^_ktp/hlwwa`{EUVmpiMj~');
define('SECURE_AUTH_SALT', '%<SmHaae-]dmaa|Wr&?c2+]PKx=x.{R*3_V5`EwL-SKD?d=&EuDrY:$h3)>$#Da.');
define('LOGGED_IN_SALT',   'B^Ej4HdQ,-@Zwkez+Mw_vp~eZb4g3/[y/,?CT.@N*6N(3po-%xjfVQSj*P.7h[ @');
define('NONCE_SALT',       'gDLt$i4}:4_6.rXj(Z6J>6^pr<^vObyV|1D`}wyvmgU2rUARE!0K~#{i_gFd:ZGS');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
