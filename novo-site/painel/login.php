<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-funcionario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php

        if(isset($_POST['acao'])){

            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = MySql::conectar()->prepare("SELECT * FROM `usuarios` WHERE email = ?  AND password = ?");
            $sql->execute(array($email, $senha));
            if($sql->rowCount() == 1){

                $_SESSION['login'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('Location:'.INCLUDE_PATH_PAINEL);
                

            } else{
                echo 'email e senha incorrewtops';
            }

        }

    ?>
<div id="header">
        <header>StarBem</header>

    </div>
    <div id="menu">
        <nav>
            <ul style="margin-left:35%">
                <li><a href="../index.html" target="_self">Home</a></li>
                <li><a href="doacao.html" target="_self">Doações</a></li>
                <li><a href="Produtos.html" target="_self">Produtos</a></li>
                <li><a href="faleConosco.html" target="_self">Fale Conosco</a></li>
            </ul>
        </nav>
    </div>
    <div class="menu-logo">
        <i class="fas fa-bars"></i>
        <img src="../images/logo.jpeg" alt="">
    </div>
    <div id="menu-mobile">
        <nav>
            <ul>
                <li><a href="index.html" target="_self">Home</a></li>
                <li><a href="doacao.html" target="_self">Doações</a></li>
                <li><a href="Produtos.html" target="_self">Produtos</a></li>
                <li><a href="faleConosco.html" target="_self">Fale Conosco</a></li>
            </ul>
        </nav>
    </div>
    <div class="box-login">
        <div class="logar">
        <p><strong>Email:</strong>admin@gmail.com</p>
        <p><strong>Senha:</strong>123456</p>
        </div><!--logar-->
        <div class="row">
            <form class="col s12" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="email">Email</label>
                    </div><!--input-field col s12-->
                </div><!--row-->
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" name="senha" class="validate">
                        <label for="password">Password</label>
                    </div><!--input-field col s12-->
                </div><!--row-->
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" id="submit" name="acao" value="Entrar" class="validate">
                    </div><!--input-field col s12-->
                </div><!--row-->
            </form><!--col s12-->
        </div><!--row-->
    </div><!--box-login-->
    <footer class="rodape">
        <div class="conteudo-rodape">
            <h3>Todos direitos reservados - StarBem<img src="images/copyright.png" alt="copyright"></h3>
             
            <p>Av.Silvio Andrade n°:555 - São Paulo SP</p>
            <p><a href="faleConosco.html">Fale Conosco</a></p>
        </div>
    </footer>
    





<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>   
</body>
</html>