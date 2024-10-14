<?php
session_destroy(); // Encerra a sessão
header('Location:' .'../'); // Redireciona para a página de login
exit;