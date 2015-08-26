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
define('DB_NAME', 'pj01');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'DpirNds!>c5%E*&QJNI}#H,rcz}d|0;$J3?W?F<H`?-AWK]D@KZc:aGw?oG-}e #');
define('SECURE_AUTH_KEY',  'Q52FqpX*9I,-=+o__AG%.W(2LakTM<v&k-Lnb7N+mCR7XRv~Hwh&c)@z(;:u9x_X');
define('LOGGED_IN_KEY',    'P -b+,_xj_d#|L}m(t{1g{K0wx.OlFTxpM~B-pfQ=iU#nDi3=&oq_~7:nB%9r^_J');
define('NONCE_KEY',        '<[~-{sm=FQh|{Y=wHLmqH4u}.JT/+_miLrlU%:.lr7tSgIEhUax<j]]m(,%hD_+v');
define('AUTH_SALT',        'e0[C#uA%=kAah%DNfz*0&?LiZXtRir`i)pT~<z aa?mG9{Kr YsLRo~[_NIPw,h/');
define('SECURE_AUTH_SALT', ':nBrH5VwnIz80`3Y+x*_Pl}Hf}t$#r|U)DWO*K:e|@f0XvE:|O-/[f!2$p_3af3B');
define('LOGGED_IN_SALT',   'P4E!CrV^jy7r_(7vbe)J(mX|}wnc;?,|FR7B}JJ-LHmtN{tOm4pfS<K@Oh]VT4C9');
define('NONCE_SALT',       '+HntCy+G92_FbvyZP-Wvy*M8=4p1*D {i%)fSb I%|fT&k`Ixs)5i+u7-:do~tSF');

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
