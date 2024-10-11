<?php session_start();  $_SESSION = array(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once("conexao.php");?>
</head>

<body class="fundo index-estilo">
<?php include_once("nav.php");?>    
    
    <!-- <div class="tela"> -->
    <div class="row col-10 col-lg-8 col-ml-10 col-sm-10 d-flex justify-content-center align-items-center" id="container" >
        <div >
            <img id="usuario" src="Imagens/perfil.png"" alt="">
            
            <form action="http://localhost/App_kira/valida_login.php" method="post">
                <div class="form-group">
                    <input class="email" type="email" name="email" id="email" placeholder="Digite seu e-mail" required="required">
                </div>
                <div class="form-group">
                    <input class="senha" type="password" name="senha" id="senha" placeholder="Digite sua senha" required="required">
                </div>
                <?php if(isset($_GET["login"]) && $_GET["login"] == 'erro1'){?>
                        <div class="text-danger">Usuário ou senha inválido(s)</div>
                <?php }elseif(isset($_GET["login"]) && $_GET["login"] == 'erro2'){?>
                    <div class="text-danger">Favor realize o login para acessar</div>
                <?php } ?>
                <div>
                    <input class="botao" type="submit" name="enviar" id="enviar">
                </div>
            </form>
        </div>
    </div>
    <!-- </div> -->
</body>
</html>