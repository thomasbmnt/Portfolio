<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V.`ta|3^yHb||GxP?(0BUr x73(VtJG7z=aVt>sf9lVEs}a]91O^-IT`_XH`?W)M');
define('SECURE_AUTH_KEY',  'UbSfo!tzN!$WoC>5^_eL1L?GZd-<Yv/Vp/j Mg=+O{;x*Cl*Tyb|IdP*VRp.$!cA');
define('LOGGED_IN_KEY',    ']OH1sO|*ez 7Cq/i)|?|T?QZg9KdP4.MxQ~#@K:b_>W}s7pPQ+m_8m]`4&X.K?WW');
define('NONCE_KEY',        'R!.w#>ym|`UgY|uxm88rYbm9JN4|E(>Ek[n7iO#zX</B-n@ 3]D@j}-tZ-F}59QO');
define('AUTH_SALT',        'of+lF+/Bb^<^(FyZZ7;|@0-/~:j.dKIa%hnj|]H r(K)$j<_]2C~kGqhqlfnxsp7');
define('SECURE_AUTH_SALT', '_F`dd6YCyTAi7A-j<WYQzFL9>vu!{FncN 85E~s7-jA/!AD~#68xHW(Bg|0p?m x');
define('LOGGED_IN_SALT',   ';[WSD[ltl%$YhT|B;]PZZl}hcDA*^;N`;ZK1Ld<:{|e1:=(,?**aR.O1yCl4gV|%');
define('NONCE_SALT',       'V`QxA`8w9c4{dfN+MdwU L$Wt<1Z$yNU.x,PS6Ir!rs5%dSVt[V1GGi, }d!2+-}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');