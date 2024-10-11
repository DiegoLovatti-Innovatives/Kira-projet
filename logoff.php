<?php
//Remover indices do array de sessão
//unset($_session['x']); tem inteligencia para remover o indice apenas se existir

//destruir a variavel de sessão
//session_destroy(); será destruida porém é necessário forçar um redirecionamento

session_start();
session_destroy();
header("location: index.php");
?>