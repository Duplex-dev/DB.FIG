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
define( 'DB_NAME', 'db figurines' );

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
define( 'AUTH_KEY',         'XC*c9G,883_u.Sw[CtB.Pj;CmAZnJ5Z/:0rb$XP!xwsZH|~IQQ+~cIqQf+)=AQ-1' );
define( 'SECURE_AUTH_KEY',  '}LeWc*<>7+*d.y|y3gy[<QvPkgDOXcD1H??39DVB#8.4<yaCgNp[:5+64Y)cdW!D' );
define( 'LOGGED_IN_KEY',    '?ZtH)vn4,2e68GsdDyE1Xt$ZGbQ8CS}/gQj:~bDQyz8=*UO@p_*?p-LPJdKqjSc=' );
define( 'NONCE_KEY',        '$vl!<Uz&0] m!r=LP3YsLkI^07PVUY14e],$TDZ=<YuL8N:&^Xb6cChEm 8no^e/' );
define( 'AUTH_SALT',        'MESIu.v::w1<Q,^Sf?qA|N||LYw$;A(NT5TR?BI|k~!MmR+BWg`vnX]oykMYVElC' );
define( 'SECURE_AUTH_SALT', 'wZiuD$KDGKQ$tZS)NIgD0.<@JUR!,pQ1bTipF`rz@4#kac(Q.(RW.ohO>jH1VS[~' );
define( 'LOGGED_IN_SALT',   'A3Y}*<K9Fg64B8,v-AgHCW&nF]*l/:,?KT||lbIj?AojiltGbTj|bxV=1S9p :9{' );
define( 'NONCE_SALT',       'W2#~v,Hj#2RA@^&io,@,{Yta0vkXmn%&/aUGigy1S(;aomL`_L5NEbpy )|Wf_Dr' );
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
