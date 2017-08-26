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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'marvel');

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
define('AUTH_KEY',         '|W3X-[c{$Sc<iB(_L,w*;!5MiN JTbF1ueG%I.K=1|8nF{S}zS4vKN~%,7o8k43c');
define('SECURE_AUTH_KEY',  'rJ(?6t4Z>,aKYdDj -<Qe)p`Hi~.T&V>p#<14hfDq%ANP+[I;=K~ZtRLB6#SPUuw');
define('LOGGED_IN_KEY',    'Ai^AVH#zc21@I#eFTCNO8LDmUqL:uP_ZcUs{)d?Qps#DP)tUVO:Y@iKsFCDY]/!|');
define('NONCE_KEY',        '^EJ[$>u7!q1:z[ij}fJ@`jLqc}AN(1G/2@fYf@z/@?C`O{[,#*L&GVdP$AtxM;g|');
define('AUTH_SALT',        'Iu+66Hn5:0Y`(xXX2d5J~i{xu4/n2n]=Ru>?FAL[sU#?f<2+@NbZmI?HF/Lp>,x#');
define('SECURE_AUTH_SALT', 's&3bZk5M=<ku,xdf#saem@/c?<kg K$Addzkt/{z)MccA8DN_iY,uy$)k( ?vP-U');
define('LOGGED_IN_SALT',   'zf7%H&Sy(ua]+5Q~Px@)A|BIzD:ft6tX.X%~c}7zJWmZ/vLeGVFg6vwafB %em7<');
define('NONCE_SALT',       'e6W:YY66&IH3`zKmgG5SJZQulB[U/cQCn5;#G8mNnr|nr=~snv^sWu7^%6Kj60f}');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'il_';

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
