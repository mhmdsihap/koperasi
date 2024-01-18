<?php
session_start();

if (!isset($_SESSION['users'])) {
    require_once(__DIR__.'/../template/config.php');
    return header('location:'.base_url('auth/login.php'));
}

require_once(__DIR__.'/../template/dashboard/main.php');
?>