<?php

define('BASE_URL', 'http://localhost/laracast-php4beginners/section2');
define('HOME_PAGE_URL', BASE_URL . '/');
define('ABOUT_PAGE_URL', BASE_URL . '/about');
define('NOTES_PAGE_URL', BASE_URL . '/notes');
define('CONTACT_PAGE_URL', BASE_URL . '/contact');

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3306');
define('DB_NAME', 'db_laracasts_section2');
define('DB_USER', 'dsb99@localhost');
define('DB_PASS', 'abc123000');
define('DB_CHARSET', 'utf8mb4');
define('DB_CONFIG', [
    'host' => DB_HOST,
    'port' => DB_PORT,
    'dbname' => DB_NAME,
    'charset' => DB_CHARSET,
]);
define('DB_DSN', 'mysql:' . http_build_query(DB_CONFIG, '', ';'));