<?php
/**
 * Get current request url
 * @return tring
 */
function getCurrentRquestUrl(){
    $prefix = "http://";
    if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"]=="on"){
        $prefix = "https://";
    }
    return $prefix . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}
/**
 * Display with <pre> tag on browser
 * @param All format $value
 */
function preTag($value) {
    if (is_string($value)) {
        echo "<pre>";
        echo($value);
        echo "</pre>";
    } else {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }
}
/**
 * Init display error messages
 */
function myDebug(){
    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);
}