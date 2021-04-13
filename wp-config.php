<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bd_niatala' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-:5q7VSDV;nWP[+zweR}@-OAih>je[h;5u6D-@=^<~,}A+EsCLu kG(i:?y0u1n;' );
define( 'SECURE_AUTH_KEY',  '&DFj,n16wQz5Ax?l~ivrS8j9GH {^ AK[<heidUq],g/{;o=lR(aVyra$its ]b]' );
define( 'LOGGED_IN_KEY',    'S0.~`;BlP6OkeK@:*9^Eqt!AWD4.V4-`D=S^7}-h^^gZ^V[6ht5`VjehY4:iRRGv' );
define( 'NONCE_KEY',        'e+!wAo#2ld5Od2n~0I4cLsY%3#i6}1$brYBDHHjVs;~D5P{G+)cr_#%AE;_V9c4C' );
define( 'AUTH_SALT',        'AIKA#Yc0W01uJ7oKe(k3BM0!F`e5Tm~7>U**u]d*5nOmafW+>r~c[7Q+])J%ZW:v' );
define( 'SECURE_AUTH_SALT', '&Z*^7W*/Eu1Mkt)PXL)TgHM6^(lvnBMI5aZizJ,YLhX!OuI&eMG[{=S+2$Bv>52F' );
define( 'LOGGED_IN_SALT',   '#TV} }HS_h >NGD!vHlM9e)d4UTc=C|?VDNC+OIFO=W.oJX60-63~_n2Y*d65Z*t' );
define( 'NONCE_SALT',       '`:5&Ul.TWsFp6~i.;PXXHFHp61%=B*=wgTPn=p.XO6=D8#wG *#>09KC!Ip|7&!o' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'xcdwp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
