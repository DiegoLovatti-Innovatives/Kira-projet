<?php
    session_start(); 
    if(!isset($_SESSION['autenticacao']) && $_SESSION['autenticacao'] == false){
        header('Location: index.php?login=erro2');
        exit();
    }
?>