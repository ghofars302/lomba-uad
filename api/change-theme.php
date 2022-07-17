<?php
    if ($_SERVER['HTTP_REFERER'] != null) {
        $cookie_enum = isset($_COOKIE['theme']) and $_COOKIE['theme'] ?? 1;

        if ($cookie_enum == 2) {
            setcookie('theme', 1, time() + (86400 * 30), '/');
        } else {
            setcookie('theme', 2, time() + (86400 * 30), '/');
        }

        header("Location: " . $_SERVER['HTTP_REFERER']);
        http_response_code(301);
    } else {
        echo "You must use referer to change theme";
        http_response_code(400);
    }
?>