<?php
// Encerra a sessão do usuário
session_start();
session_destroy();

// Redireciona o usuário para a página de login
header('Location: index.php');
exit;
?>
