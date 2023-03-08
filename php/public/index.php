<?php

/**
 * https://www.php.net/manual/en/curl.examples-basic.php
 */
//$PHP_URL_PATH="https://jsonplaceholder.typicode.com/comments?postId=3"
$name = $_GET['name'];

if ($name == null) {
    $name = 'guest';
}

$message = $_GET['message'];

if ($message == null) {
    $message = 'hello there';
}

echo "$name says: $message";

