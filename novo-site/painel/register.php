<?php

    // codigo do banco de dados

    $pdo = new PDO('mysql:host=localhost;dbname=empresa', 'root', '');
    /*
    $tables = $pdo->query("SHOW TABLE");

    $tables->execute();

    $tables = $tables->fetchAll();

    echo '<pre>';
        print_r($tables);
    echo '</pre>';
*/
  

    $sql = "CREATE TABLE Produtos (

        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome_produto VARCHAR(30) NOT NULL,
        preco FLOAT(10) NOT NULL,
        quantidade INT(6) NOT NULL,
        cod_barras INT(70) NOT NULL


    )";

    $pdo->exec($sql);


    if(isset($_POST['acao'])){

        $nome_produto = $_POST['nome_prod'];
        $preco_prod = $_POST['preco'];
        $quantidade_prod = $_POST['quantidade'];
        $codigo_barras = $_POST['cod_barras'];

        $sql = $pdo->prepare("INSERT INTO Produtos VALUES (null, ?,?,?,?)");

        $sql->execute(array($nome_produto, $preco_prod, $quantidade_prod, $codigo_barras));

    }


?>


<?php 
    //sistema de loggout
    if(isset($_GET['loggout'])){
        Painel::loggout();
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div id="header">
        <header>StarBem</header>
    </div>
    <!---------------------------------------------------------------------------------------------------------------------->
    <div id="menu">
        <nav>
            <ul>
                <li><a href="../index.html" target="_self">Home</a></li>
                <li><a href="../doacao.html" target="_self">Sobre</a></li>
                <li><a href="../Produtos.html" target="_self">Produtos</a></li>
                <li><a href="../faleConosco.html" target="_self">Fale Conosco</a></li>
                <li><a href="<?php echo INCLUDE_PATH_PAINEL?>?loggout"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
            </ul>
        </nav>
    </div>
    <div class="menu-logo">
        <i class="fas fa-bars"></i>
        <img src="images/logo.jpeg" alt="">
    </div>
    <div id="menu-mobile">
        <nav>
            <ul>
                <li><a href="../index.html" target="_self">Home</a></li>
                <li><a href="../doacao.html" target="_self">Sobre</a></li>
                <li><a href="../Produtos.html" target="_self">Produtos</a></li>
                <li><a href="../faleConosco.html" target="_self">Fale Conosco</a></li>
                <li><a href="<?php echo INCLUDE_PATH_PAINEL?>?loggout"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
            </ul>
        </nav>
    </div>

    <div class="add">
        <div class="container">
            <h2 class="text-secondary">Adicionar Produtos no sistema</h2>
            <form id="form_produtos" action="" method="post">
                <div class="w50">
                    <input type="text" id="nome_prod" class="form-control" name="nome_prod" placeholder="Nome do Produto:" required>
                </div><!--w50-->
                <div class="w50">
                    <input type="text" id="preco" class="form-control" name="preco" placeholder="Preço:" required>
                </div><!--w50-->
                <div class="w50">
                    <input type="text" id="quant" class="form-control" name="quantidade" placeholder="Quantidade:" required>
                </div><!--w50-->
                <div class="w50">
                    <input type="number" id="cod_barras" class="form-control" name="cod_barras" placeholder="Codigo de Barras:" required>
                </div><!--w50-->
                <input type="submit" class="btn btn-danger" value="Enviar" name="acao">
            </form>
            <div class="clear"></div><!--clear-->
        </div><!--container-->
    </div><!--add-->
    <footer class="rodape">
            <div class="conteudo-rodape">
                <h3>Todos direitos reservados - StarBem</h3>
                 
                <p>Av.Silvio Andrade n°:555 - São Paulo SP</p>
                <p><a href="faleConosco.html">Fale Conosco</a></p>
            </div>
        </footer>


<script src="../js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8debdb91c9.js" crossorigin="anonymous"></script>
<script src="../js/menu.js"></script>
</body>
</html>