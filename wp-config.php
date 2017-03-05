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
define('DB_NAME', 'kerrmann');

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
define('AUTH_KEY',         ' G-M;eT@TnzotJq6BZ7!Qk?;UAMoNU1t$??9k@>:5.XlH@eD#Z}1wswY]&So{R=>');
define('SECURE_AUTH_KEY',  'Y$i[?wRsi_s.4KE<qaI[=F%y%GV?pkSzaOUcmj0e/+*zWJtC%N9wvqLzm=weD[sg');
define('LOGGED_IN_KEY',    'b%)Lss^?~hyzNNSjiU|L,MFu)2IK9*{iAC.V?HXwjd^R9a=?/M2(D>wsPd$1x.*g');
define('NONCE_KEY',        '|3:h(Ng8`*z:P(xn{Z<X2$6Hd}l3Z#+iI3%a|?R7+/rXOz?t,^EBbY)RL9bBgyP/');
define('AUTH_SALT',        'P smM83$OcA:W}ew]}4Ok?<v{* 0=+8EL1Gka,A/n@14+{i(FE_gcB!R([<f/F=S');
define('SECURE_AUTH_SALT', '=;i<]Q`jkLus(c`m[Rr!xZS@ISXBwG}jnY6~#SWF%?b-AN/j)mh51W;BNJS=jxeK');
define('LOGGED_IN_SALT',   'Z7^k0Il+]PZz+ q8{6=*.AhnxEb]z.r*7h0c#dcJrPnb]UX2})d$Sz3VzQEC!hCr');
define('NONCE_SALT',       'w9 @%FR(3^~h#wW+^/k3w2s|`k ?(F+;C2ze?1T#.Gd`(|?gxkZZtZnm8!a=4b_[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_kerrmann_2k17_';

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