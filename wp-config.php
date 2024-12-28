<?php
define( 'WP_CACHE', false );
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', "ncolmmdshosting_nhahang03" );


/** Username của database */
define( 'DB_USER', "ncolmmdshosting_nhahang03" );


/** Mật khẩu của database */
define( 'DB_PASSWORD', "jfmYC{!%*lyV" );


/** Hostname của database */
define( 'DB_HOST', "localhost" );


/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=G>G<zYI8ms2h<AZ5UOc_F]._$h@|Pa1}Wyy Rx:{P7|:$^D>.yR)SB}17NvsJZq' );

define( 'SECURE_AUTH_KEY',  '7}h[U<r+*lUup&un*#TGD#d7@EOI?CB28!r/ZbEdstm!y&OO}G^;Wgf$<Qx;/_Yh' );

define( 'LOGGED_IN_KEY',    'R-MEk8$H]P&DICB*V%u^-8IzO[^Mq^]@6C0]5xJdc,SX*g[ez>+x`o.$JDZn15 u' );

define( 'NONCE_KEY',        '#Fd.?8sA3lvyX;K`Bd(OwTuwzhQ[g0:>r87kw~xxRt:X_`chR ;;-2d&>?ps=8u7' );

define( 'AUTH_SALT',        'w4a*5c!l.W`t^?k~WMi(moCrwVz`m,Zh3,oC2sK7[EWxo&KsQ>m:E5^35-~74,rv' );

define( 'SECURE_AUTH_SALT', 'DQL$mT4_:}@7pEI>!IyDB+g9m[hP0~lj9j}B_ou]mQSgUYu-PsEPDP<N~c,3;/FY' );

define( 'LOGGED_IN_SALT',   'my0Xh0ca+=7N4|^]&vJBPYiz}+H0LLSN?x?OLnYpTCX18<m $`4,YBlb=Dqw*<2M' );

define( 'NONCE_SALT',       '-uRrx8Cc,=Oo+wz7ebW}7$b8`/lrq$&#RlXrr 7^u5Xtyrr-cV7E1,IdNwxQ/Bs}' );


/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
 
// Bật chức năng chạy debug
define( 'WP_DEBUG', false );
 
// Bật chức năng sao lưu thông báo lỗi vào tập tin /wp-content/debug.log
define( 'WP_DEBUG_LOG', false );
 
// Ẩn các thông báo lỗi và cảnh báo ra bên ngoài màn hình
define( 'WP_DEBUG_DISPLAY', false );
@ini_set('display_errors',0);

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/** Change Media Upload Directory */ define( 'UPLOADS', ''.'media' ); 

define( 'DUP_SECURE_KEY', 'ZfcI4B+*>JP pA/|uCyxXhPmU(5+iw@,kXl036V5Y2TqRI{i5F11]K?&-gM+_|}s' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//disable WP Post Revisions
define( 'AUTOSAVE_INTERVAL', 60 ); // seconds
define( 'WP_POST_REVISIONS', 9223372036854775807 );
