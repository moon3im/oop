<?php 

namespace App\private;
function dd(...$vars) {
    foreach ($vars as $var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
    die();
}

function redirect($url, $statusCode = 302) {
    header("Location: $url", true, $statusCode);
    exit();
}

function is_post() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function session_flash($key, $message = null) {
    if ($message) {
        $_SESSION[$key] = $message;
    }
    return $_SESSION[$key] ?? null;
}

function array_pluck($array, $key) {
    return array_map(function ($item) use ($key) {
        return $item[$key] ?? null;
    }, $array);
}

function get_client_ip() {
    return $_SERVER['REMOTE_ADDR'];
}

function get_query_param($key, $default = null) {
    return $_GET[$key] ?? $default;
}

function set_session($key, $value) {
    $_SESSION[$key] = $value;
}

function get_session($key, $default = null) {
    return $_SESSION[$key] ?? $default;
}

function clear_session($key) {
    unset($_SESSION[$key]);
}

function flash_message($key) {
    if (isset($_SESSION[$key])) {
        $message = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $message;
    }
    return null;
}

function slugify($string) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
}

function format_date($date, $format = 'Y-m-d H:i:s') {
    $timestamp = strtotime($date);
    if ($timestamp === false) {
        return null;
    }
    return date($format, $timestamp);
}

function start_session() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function end_session() {
    session_destroy();
}

function handle_404() {
    http_response_code(404);
    include '404.php'; 
    exit();
}

function handle_500() {
    http_response_code(500);
    include '500.php'; 
    exit();
}

function handle_error($errorNumber) {
    switch ($errorNumber) {
        case 404:
            handle_404();
            break;
        case 500:
            handle_500();
            break;
        default:
            http_response_code(500);
            echo 'An unexpected error occurred.';
            exit();
    }
}