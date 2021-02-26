<?php
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
define( 'DB_NAME', 'nonbaohiem' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '<.&CXy9*o9^(tr,#N=<x!}6Jw3y-OPvQN*@xxM23,koMk-b)5PCv|]_c+OE)E2$J' );
define( 'SECURE_AUTH_KEY',  'FtM/`@U#gv,TKnp([xO>q4?gCDFJC1vd6dKDvYyMTo>x_doIIOjIpA/1<wc52Rax' );
define( 'LOGGED_IN_KEY',    'L#|%F^{Pz-bwnR6B;M[=EjP4V_?r6;%qpzN}wm<bxbjH.<bHPuux8ZloUJxL=`lS' );
define( 'NONCE_KEY',        'Y[+tb%YT_dIo(@K&O]G4rA23e0Ya&,hc-mF^)B2H1A@ h:U.QLv<m4W}/)Cg}suI' );
define( 'AUTH_SALT',        'xsEaS=Z-cwGs[$=6Srl__C.x@TW0X-S>ySyk9!-<l!h1^92AS<<e$z4~wR:zWzkX' );
define( 'SECURE_AUTH_SALT', '~*zwRLzUwX`bV~p_[GK7m2yPb+y<@nL#|8C#sM=J%g;4`d>!w(TxzUqM&_j(tP5V' );
define( 'LOGGED_IN_SALT',   '(d8]=tBL>7OnC7`xm<wtCzz^ugVM~.1!*D.aC)}lCWC/pUb$p[u8*ZR;8K8@,s5T' );
define( 'NONCE_SALT',       'pK=Z-R]E)&V9z~]M{iAR3=8&pL(oLvW^JNRcSH!ha`sF,$gg..C#whX5WU!zDB,L' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
