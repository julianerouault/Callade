<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'juliane-dev');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{4hQ)QpN9n`O}rGo%pNatJ!D.Q3u/seE{v5R6f:IiXN8]SUD[;p(3z:9}Osi.M0q');
define('SECURE_AUTH_KEY',  '6%]1!BM+LyG~pxT5<-CY<23UdFGd_;o4}J4D/Gk6gaSbM.%&pwp,7efA_w)4Gr3S');
define('LOGGED_IN_KEY',    '=zD5ocHx?C=jJQ.me`X) DPWB{;Z[}diViFPg69R7YJ[p}.r;%HLcfodXr3 8#ao');
define('NONCE_KEY',        'hW0{([(4v8SkPX~7.=Iv<!W6~X.3D@LC>_(uq]Gmf9@MoCA{SHi;Axn;`lC`-EM<');
define('AUTH_SALT',        '}(JuJH8nY+4A6`Wtm_Ai!jen~s3oZt2#CI_l)?%#Xd@f!k3C?HlU90xNd6TdTXV5');
define('SECURE_AUTH_SALT', '/dxWw+Yo.0O4|HH-sB)7V3[G^c4++shN)~T? oHC.>Av5};<83/=.s5n``ji[5$E');
define('LOGGED_IN_SALT',   'YY(MV8M(ggyW6./,a#^>r}Vdgx}_eM,K4-Li^mQb0(fE1xn>%9wE[c|?gmjy18;Z');
define('NONCE_SALT',       'T^})ox7(s:N.a5zyX#;DB5yOg{yMejuVW;1=.F~H/}atX?|FaBK+33F`NB)7;]%B');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');