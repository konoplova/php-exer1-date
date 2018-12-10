<?php
$url = 'https://www.google.com.ua/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjwh4GO4JXfAhVFhqYKHaEyAukQjRx6BAgBEAU&url=https%3A%2F%2Fwww.gettyimages.ie%2F&psig=AOvVaw2GC22nYAFGbEdJhUjkOyvJ&ust=1544548076986371';

var_dump(parse_url($url));
var_dump(parse_url($url, PHP_URL_SCHEME));
var_dump(parse_url($url, PHP_URL_USER));
var_dump(parse_url($url, PHP_URL_PASS));
var_dump(parse_url($url, PHP_URL_HOST));
var_dump(parse_url($url, PHP_URL_PORT));
var_dump(parse_url($url, PHP_URL_PATH));
var_dump(parse_url($url, PHP_URL_QUERY));
var_dump(parse_url($url, PHP_URL_FRAGMENT));
