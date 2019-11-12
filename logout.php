<?php
session_start();
setcookie('id', '', time() + 365*24*3600, null, null, false, true);
session_destroy();
header('location: index.php');
