<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'u426731779_grupo');

/** O nome do utilizador de MySQL */
define('DB_USER', 'u426731779_grupo');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'fechado');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'mysql.hostinger.com.br');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z`O`#/;.|b:~GA+8Ukia$=,#!HKDR[`Hz~[GVCYYqY86-hy`w[ Mai6(Z-}cX~NJ');
define('SECURE_AUTH_KEY',  'nGY&Y9ol*:qHq3:76dX&>=~r{@Dw<kbN0h|$`r^J!+a(6LNs j[+chiun+|SOc3X');
define('LOGGED_IN_KEY',    ';dxe{:sP5YL~`@b;b )jCZ;t=Q<Px*8{LC6FFxB# aPHRqXUMY-bKPXCP]l/7X~l');
define('NONCE_KEY',        '|H2gTUT X$ 0SPzo^+kC*8.UErrE.I-)B[$(g  -z]2:w#h:3@KsaA+[V1=M8+1{');
define('AUTH_SALT',        '*V5W603Z@$C-f+)p/X$[WZQp;SQ|fkR$ihBKY;<]l?g9NDX0Pg9%uQh8Uk5~JPar');
define('SECURE_AUTH_SALT', 'Y[y9Ws|x<MVlsAG8),%)_if{!Odt%?zaoCl!|1o>(5ujy2`>Du1ND08vSG%,oebW');
define('LOGGED_IN_SALT',   '2h3h{ !5A?1=xwd:m_O@%Geqy?Vxakko[l9e+>C}4/{HM$uB@`%!F%+PK-o?+[OV');
define('NONCE_SALT',       '-~]|+J&+e-K(A4[$O`>H5n;8_&aqo} 80:R<pLl?~:G1Z+2zkzDm-aXDm.1[i.j5');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
