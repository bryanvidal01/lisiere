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
define('DB_NAME', 'lisiere');

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
define('AUTH_KEY',         'R#QoV1}?}_eB[]#a[#,P{wq!1cwm9B!Xcnp*(e*@=3/G__tbh(Li$y##B<:uS739');
define('SECURE_AUTH_KEY',  '!Og-C;FNv Lld@e,RvNb=6KO3UPIxA,,p!A)or6r,2~M}93rk1.>P;o?i:F.v-{U');
define('LOGGED_IN_KEY',    'AR4s$CjsHS?DLrfYp;P$1*|R<Z3%&={J?S[@MTcG49sg3nsG8}9R,D9@F75J(fhb');
define('NONCE_KEY',        'a_mb2BP57Pc)lcTrcC$[Db_h1e6Fj8|6gO:%&+-d`H3i@c<]Hy&Wr5N3uI^P%[bF');
define('AUTH_SALT',        'j2/,5_;i.~aMNO/O*/3(L7zLPJ:6MG-_.(~n}QK/F$X*$8B3[u#U5qe-Q/6kA,e.');
define('SECURE_AUTH_SALT', '8<B6dV <;e{t5F}k&4CR<e,DlYwv&@zoqpVz{tl9%f]h,byc%9yM9LxMX1V$WExl');
define('LOGGED_IN_SALT',   'm+6l^<f4:{OC;b`O7s|l,`=wJK($Wg0=`dh8|B]E5TUhDhZly< .-}MWH:!pmFn8');
define('NONCE_SALT',       'bbL3=q{O(|Yv]iIwm5/7qfPaQsn1L!!iVnd2#t&O5cx&#Co5kU2z]-`ub%wb<LBG');
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