<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start([
        'cookie_lifetime' => 86400, // 1 day
        'cookie_secure'   => isset($_SERVER['HTTPS']), // use secure cookie if HTTPS
        'cookie_httponly' => true, // prevent JS access to cookie
        'cookie_samesite' => 'Strict', // CSRF protection
    ]);
}
