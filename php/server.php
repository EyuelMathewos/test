<?php
// Example from Laravel framework 
return call_user_func(function () {
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");	
header("Referrer-Policy: origin-when-cross-origin");
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $publicDir = __DIR__ . '/public';
    $uri = urldecode($uri);
    $requested = $publicDir . '/' . $uri;
 
    if ($uri !== '/' && file_exists($requested)) {
        return false;
    }
 
    require_once $publicDir . '/index.php';
});
