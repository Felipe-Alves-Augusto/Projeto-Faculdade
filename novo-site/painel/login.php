<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-funcionario</title>
        <!---------------------------------BOOSTRAP----------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <div id="header">
        <header>StarBem</header>

    </div><!--HEADER-->
    <nav class="back">
        <div class="container">
            <a href="../produtos.html"><i class="fas fa-long-arrow-alt-left"></i></a>
        </div>
    </nav><!--back-->

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
        <h2 class="text-secondary">Portal do Funcionário</h2>
        <p class="text-secondary">Efetue o login para entrar</p>
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
                echo '<p class="login-error">Email e Senha incorretos!</p>';
            }

        }

        ?>
        <form method="post">
            <div class="form-group">
                <label class="text-secondary" for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" required>
            </div>
            <div class="form-group">
                <label class="text-secondary" for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" name="senha" id="exampleInputPassword1" required>
            </div>
            <input class="btn-danger" value="Entrar" type="submit" name="acao">
        </form>
    </div><!--box-login-->
    <footer class="rodape">
        <div class="conteudo-rodape">
            <h3>Todos direitos reservados - StarBem <i class="fas fa-copyright"></i></h3>
             
            <p>Av.Silvio Andrade n°:555 - São Paulo SP</p>
            <p><a href="faleConosco.html">Fale Conosco</a></p>
        </div>
    </footer><!--rodape-->
    

<script src="../js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8debdb91c9.js" crossorigin="anonymous"></script>
</body>
</html>