<?php

/**
 * https://www.php.net/manual/en/curl.examples-basic.php
 */
$url="https://jsonplaceholder.typicode.com/comments?postId=3";
$name = $_GET['name'];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
echo $output;

curl_close($ch);    