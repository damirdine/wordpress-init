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
define( 'DB_NAME', 'wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wp_dev' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Synthesis-Skating-Femur1' );

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
define( 'AUTH_KEY',         'mRzt[Tv;(4AhSO8^K^2|ILBsvSZqd[8ACf|6U;|qxYeD!h+H,ub{|w^hDYeEo_yU' );
define( 'SECURE_AUTH_KEY',  'L2:A9UDRA$Z[p3>uY]qz{lW? +Lyz: RsP@dDeQH;;eQUkdzdESD{euf,7:UP:;c' );
define( 'LOGGED_IN_KEY',    'ha$8kUFi6%z>BF;DWtT@XU[:?&wQeljh0[^JV<IVz^K(x{a=sB>#YDL6eqU]exOC' );
define( 'NONCE_KEY',        '<.cHTd;YOyo*;{l8pdpAe}:-sXoZ%~r*)E!AMpTO!HFlb>:~(z+C:uHXMQHbyN%-' );
define( 'AUTH_SALT',        'V;W>+ hs`sZ7FR^Y|5}/z+AduyE+q]QSCWzi6$;sru!dvXk$w/.UI7V Xlwo;jc^' );
define( 'SECURE_AUTH_SALT', '.UlZNulQR2$X<sE_RrTy#$bHH<A}8=s,4U!D:YIm1JQ%r8^T2^$s?ZoR7MN*dqTR' );
define( 'LOGGED_IN_SALT',   '{TKj0X()qNC{;h9nD]h5(@0Eev4[k~|jx?.5r;=[W% GVRSv5. iQ+hlw(364YSe' );
define( 'NONCE_SALT',       'sklD?m?#/F`k_6+uKH0d>m&/dZEZ[@8O@MlkpbVAr21LaHA+L6$2Zp&UltE+w2[B' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
