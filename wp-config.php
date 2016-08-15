<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'takayoshi');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vG5p-Y%dXTy$M6Z9EU`?nQjbf4%B?GAsv(Tp,4PGgVwa8dlwrn,pZa&}PS$Q1ipA');
define('SECURE_AUTH_KEY',  '7Xxt91F!-xhPj;XP%I/e5%[!)mHXX]y9>~Zx$<rGp|ph;WqL#V?ILna(XK1fc}F;');
define('LOGGED_IN_KEY',    'CNV6tsH1-(;F-Ob$DU8A1oEqUY=txFGckXiRE6JiDgRHG){B>vP]&2OxGAAUJcuG');
define('NONCE_KEY',        'Z3M(<X}W#;vq=(d~_(^+3Z):Kiv_Sz+. gzR,o)TPK,qAiDXJJJI,t ^33)O14wf');
define('AUTH_SALT',        'gZ+U2j_fJ>W5k5r;{1HN?X9FjG-PxN)6Fx)]fDU(>Z/pK:lo?k|*aPtG.:Puy?8B');
define('SECURE_AUTH_SALT', ',o4-m#iF/Mq<^P_a3d7]+vl<VT>GVo!f}[F*!-I3geWvY3541MGT#>n$NnbKf`~r');
define('LOGGED_IN_SALT',   '9w^1k~b%0PNjk7=lNE?{C! n.&Fh/26e;hA`o7Oe<=]%)f)M?8<>GNS8D;jAm}T`');
define('NONCE_SALT',       ' @|8&YVcFtMM#yVW!{Xu-L6E}_*FCPb#^>W.XQd,(c[0A_XzGcyYppVflTi{gz&n');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
