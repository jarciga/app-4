<?php

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
header('Location:index.php');
?>