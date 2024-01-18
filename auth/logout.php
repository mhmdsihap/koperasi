<?php
include(__DIR__.'/../template/config.php');
session_start();
session_destroy();
return header('location:'.base_url());
?>