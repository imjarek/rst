<?php
// HTTP
define('HTTP_SERVER', 'http://rst/');

// HTTPS
define('HTTPS_SERVER', 'http://rst/');

// DIR
define('DIR_APPLICATION', '/www/rst/web/catalog/');
define('DIR_SYSTEM', '/www/rst/web/system/');
define('DIR_IMAGE', '/www/rst/web/image/');
define('DIR_STORAGE', '/www/rst/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'rst');
define('DB_PASSWORD', '6996');
define('DB_DATABASE', 'rst');
define('DB_PORT', '3306');
define('DB_PREFIX', 'rst_');