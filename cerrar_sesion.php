<?php  
session_start();
unset($_SESSION['nickname'] );
session_destroy();
header('Location: index.html');





?>