<?php
    session_start();
    $_SESSION['autenticacao'] = false;
?>

 
<?php
    // variavel para verificar a autenticação do usuarios
    $usuario_autenticado = false;
    //usuarios do sistema
    $usuarios_app = array(array('email' => 'diego.lovatti@gmail.com', 'senha' => '1234'),
                          array('email' => 'diego.lovatti@innovatives.com.br', 'senha' => '1234'));

?>

<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

    foreach($usuarios_app as $user){
        if($user['email'] == $email && $user['senha'] == $senha){
            $usuario_autenticado = true;
        }
    }
    if($usuario_autenticado == true){
        $_SESSION['autenticacao'] = true;
        header('Location: menu.php');
    }else{
        header('Location: index.php?login=erro1');
    }
        
?>