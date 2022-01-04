<?php
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params(600);
    session_start();
} else if (!isset($_SESSION)) {
    session_set_cookie_params(600);
    session_start();
}
?>