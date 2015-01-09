<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'innterpretti_bd');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/+CzNjbWzGs,yR-%[MA9Oax^mo.Hg6qxB^1z($8r+DTgNm2?P:;bv(nN E3?1oKn');
define('SECURE_AUTH_KEY',  'Hho@JOGLHRT6mJ2&K89:);y7cE)U@Ss$^ES$*0ym]e?:7z98 i7zik_.j&CoSGw7');
define('LOGGED_IN_KEY',    '%#kVdP0*fnG8s/GbSM=Fo3p(Tr4{{8n&22RYD:fe!2(AuUZ1DmI*${._D>JH@;NC');
define('NONCE_KEY',        'NghKZLM8<+/njZ+c7La@uy+X8c#k)x89N92NsnsuYc9].]2L*c_~!|Y+`i.+kd:!');
define('AUTH_SALT',        '>jUkG,;hHFG~=K2=`cJ}nQ>HV9tpIMJHa3_#[I=F<O7%k{R{%n3unY`I48$`L:G9');
define('SECURE_AUTH_SALT', '2BRs Z+Q Z-5$5| u&nge0,9|{_T%!Rp7{g9<{a;geKVRJfJqhc2dyR0O1&C8Nbp');
define('LOGGED_IN_SALT',   '}qtO5IwfQz2C/X=K8|Fa&=5Bc6-P|}W#Zr*5^x%nC%,/$>+`?a?&WbTI1VwEbMO7');
define('NONCE_SALT',       'iSykE[b H^RWR(nw5#%:c<vGO[YSQNFTtDbCXr~6:)qY=Xh#@Wn9>YmBt48)4fJf');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'int_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
