<?php
@ob_start();
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

header("Cache-control: private"); /* Fix IE6 */

if (isset($_GET[ "lang" ])) {
    $lang = $_GET[ "lang" ];
    $_SESSION[ "lang" ] = $lang;
    setcookie("lang", $lang, (time() + (3600 * 24 * 7)), 'SameSite=none');
    setcookie("PHPSESSID", session_id(), 0, session_get_cookie_params()[ 'path' ], "https://mohadese.com/", true);
} elseif (isset($_SESSION[ "lang" ])) {
    $lang = $_SESSION[ "lang" ];
} elseif (isset($_COOKIE[ "lang" ])) {
    $lang = $_COOKIE[ "lang" ];
} else {
    $lang = "en";
}

switch ($lang) {
    case "en":
        $lang_file = "en.php";
        break;
    case "nl":
        $lang_file = "nl.php";
        break;
    default:
        $lang_file = "en.php";
}

include_once "languages/" . $lang_file;
