<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'disneyqu_wo8250');

/** MySQL database username */
define('DB_USER', 'disneyqu_wo8250');

/** MySQL database password */
define('DB_PASSWORD', 'igOQw1Zz9zLV');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'N*O%X;RxKnhoaeA[C|htpr!Z|rtC{T?!$GLB*&wZHnF/]Yg_jw^!IJ>A^ifHrX+)wu_$GBwZEvU=A%?LndMkd(/<Ub{IDV-(od|YTB?_(beKiyW?dZKYZNi/;qrZR^LM');
define('SECURE_AUTH_KEY', 'OfjFBSK(QWb/_vo_>!=Rz_FIPSm/;DXkE&kGlg_y$cRsS+I=PX)[fSmwBy{ChY$maAWmeO})%scLewNvn*MueX-z<iM(N[It_M$poiVTF[?NjlDVqI/oRTM(bRDVWTcx');
define('LOGGED_IN_KEY', '(E_!O/XM[WgaG&]wtc;ON/TK_dP[B>AMh<|)krKNXSamv^F^*@Gddaox(%*Ynjx{ANHpI%-K-|-B+lP*QbP)tu/+$i&QMHt[l^Bc]bCRuw}Q;Z*eIi*KpGlM+aAGFgPE');
define('NONCE_KEY', 'wLb]a;DZv{InHFFwu|![;HmVA&N/BTjaydDa-[ZCbOryi%t;$+daIgU|-!r-MLl;CF=jzP*{TnDSky^h]ckVm/*H|]zLe*fnrJ?(du|q(^>fDo_o_pQydD]E@fhTeLCG');
define('AUTH_SALT', 'i/-TgHCm@HAepk%Kk/S]DEvJr<?X;DYlW[]EJv!RZE-k&ry=-?]NY*=hM(ajj$i*qCvsgdK(Epr]=jKdRmrh@NTJG!GNpsKM{cZCp$UFNhR%bf;a;})zczi>YmRkNYcW');
define('SECURE_AUTH_SALT', 'KxT@|bJ$&!Sat@UwewCdlgXnV)OJyDD@fIpURrwbHi+S>lq}|NG?c<t?@acv=BJu]sjT+[GRb&AmivpoPryxk{?y%=TyuZKZC(XyqpeM%%ANfV]a[|]>@?g+QYhXOP^R');
define('LOGGED_IN_SALT', ']CrsHcAJdAv|&dsQ]wKc;gLU{q}Ie@GWHF;@EY?*pkR|;P$(caZEaLsFUByp/sI_u)yOaS]Qp^nJskDq<me|sETpoLIU</-Nl/?pKJ(mg{(FnPTQ&)exz-JR<Tn)/$fN');
define('NONCE_SALT', 'BlarG<PbMD>+mIE]%sqXo>OR;(AXamc+hFJj=bNc?a/>]fAgvRrZqh*mH{SI/BNHsyWDJYd=(!ZzBc}VNrJUIEQA=bYY(T)<Jtwp&NkuI}CZm<j^sl$Zo;*D-%oCl*x]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bkcv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
