<?php
ob_start();
session_start();
unset($_SESSION['usuario_nome']);
session_destroy();
header("location: login.php"); 