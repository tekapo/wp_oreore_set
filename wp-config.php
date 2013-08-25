<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp_oreore_set');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'hfg]1=jL`7c7clJ?3;;2/&=_<,rE]jL]?+;.o(-Lv%lG(xK<x_|cR2&Qao+~~&Qh');
define('SECURE_AUTH_KEY',  'RswqZ>}v@:v}=%<)T|(YCmCNYb-x.Lo+n[5YcG>0~$UTF[7-dl_[G7l#/H=S`bD=');
define('LOGGED_IN_KEY',    'Z LjPDS[jdpj.a~VK#,Xw<(@9xMN-1C`a{Q0%K[QYXz>m*a$_d>O.{BjrBa~|LcU');
define('NONCE_KEY',        '-9`}JoYgj~*zZ<C=$Pjo.fb# `Zv2uBLhnC1YA.%+$Nrqok[J-%S1+j1<$GWdXFY');
define('AUTH_SALT',        ';AEP<qhFM3szc0eX!ba|`p_(^j:]N+Poeh%dOjLi?U=dVVdH$H [^dWz~+YmpGUt');
define('SECURE_AUTH_SALT', '2qmqZIAgZZzsp+>}y^Z]5HMBJ-x8r6VlZhTr/%3UNdM/7oV}Ez(D+F;I7r@pTWyn');
define('LOGGED_IN_SALT',   'x`pYwf8a`}T%MP;@t xyG,GWJ 9-}<HI6QY,T-)YvKICzIdT-6uh;,wR=Z*=(+FU');
define('NONCE_SALT',       '+i-M<1PW`f+Cw|,1v-1LNEB2*2Ia34!(u/G-Z,QQ$gf[Gd Mgig*V+1[?0M[m,rC');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_ore_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
