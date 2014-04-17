<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'gmsi');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'leZa{*6Yz2|u(XL]W~e_e-IzZuf-T|^O)L(U[]co*L-GD+7^UnXqn-NZh9OWHTE]');
define('SECURE_AUTH_KEY',  '+]>hP{(n{6rQ!k|X~BDu%4D.kkW5)fIS u/Voz?*OPKVNjn0>tS,![sKFB-N_tX/');
define('LOGGED_IN_KEY',    'XcVTskSa$o8MKHgBX=zg7$O]|>#%f0$eBUIZS(?!.zJHq*%R#S4K$UtY<(AjD49+');
define('NONCE_KEY',        ' pvCg$8}evd5*>XG/@Z},p)?OkYLXguMcqWuWgS6fsRwJu2cwLwlB*j6*f?RY08]');
define('AUTH_SALT',        'D}]=<qI|t|/A fJGTqVp-4f<:cJ3{~P+G|%LPHVfr54]ut_Dm:HR=!CzEwIJK)Qg');
define('SECURE_AUTH_SALT', '`Ba~BYT>.4_MGI5QStP4vCQ;A.ge4>gUErE2o#?b:uI9EPj<}4RggY$BQ,Iu3hCD');
define('LOGGED_IN_SALT',   'd8bg1w&zr]m] 6T.edu7cgnJTGfFB`&%0@8/xOu4&z-ncO:r<K{z3Jex=S9?z<O|');
define('NONCE_SALT',       '-x],,Axz ~2J1z._s/HR07JDbeIkF|H1{(N:p~_.tJ-oR&[o=Er5@O$E,llH49;z');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gmj_wp_';

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