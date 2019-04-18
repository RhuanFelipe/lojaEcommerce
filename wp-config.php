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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bancoloja');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7D[&AGH[`[D1B=P#ay2^XTa^|VE!)NdlSM#X:kRQ])StU[bL$2YQ5]kAHf+Ku$AC');
define('SECURE_AUTH_KEY',  '?27w0W/yi.>q/&dGOPssNP9D%i P5(ax_*k4eUc2{%W|N5ehp}cTo|w3{T<@=zTH');
define('LOGGED_IN_KEY',    '<R;0E*<5I3<Qq/(hMhR ?hYu7U6m>z(o`[0i{CFZV_-Rph%p_iC{/pl&Kc#:OS&c');
define('NONCE_KEY',        'Ou}2XUtYsUoNec4q=g_{e4C4W_nnhBzo/tA@7F#8i^36&_>d *J#J/AU4t<Mw1Lv');
define('AUTH_SALT',        'f?k2d;|L9ngoW%wDv2B>a;F`I&F`K?>;1?]SRd:ju[w{NnQS=*(-<F1!m3SgLKox');
define('SECURE_AUTH_SALT', '2.-;RJ?:b7@mA{sF k{ZD2P%/r?*Aqep/%eU7W5a[Q`@_RW41K/[h0GY@]P_VO6j');
define('LOGGED_IN_SALT',   '2AUs0aMl{d7eJ}i)DiL,7oHp$Q4;C<>(UyJkR@5Je=OIwk5Uik:_a:j1ClKSZ%U!');
define('NONCE_SALT',       ')UPg5!yUi%G0NpXkc8WFCQXQE(O2$O(Pnt@KmS Rn#NO%QArX^fZcP?`KQ-WVT|]');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
