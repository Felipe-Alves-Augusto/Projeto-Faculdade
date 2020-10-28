<?php

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
        nome_produto VARCHAR(30),
        preco FLOAT(10),
        quantidade INT(6),
        cod_barras INT(70)


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



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<div id="header">
        <header>StarBem</header>
    </div>
    <!---------------------------------------------------------------------------------------------------------------------->
    <div id="menu">
        <nav>
            <ul>
                <li><a href="index.html" target="_self">Home</a></li>
                <li><a href="doacao.html" target="_self">Doações</a></li>
                <li><a href="Produtos.html" target="_self">Produtos</a></li>
                <li><a href="faleConosco.html" target="_self">Fale Conosco</a></li>
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
                <li><a href="index.html" target="_self">Home</a></li>
                <li><a href="doacao.html" target="_self">Doações</a></li>
                <li><a href="Produtos.html" target="_self">Produtos</a></li>
                <li><a href="faleConosco.html" target="_self">Fale Conosco</a></li>
            </ul>
        </nav>
    </div>

    <div class="add">
        <div class="container">
            <h2>Adionar Produtos no sistema</h2>
            <form id="form_produtos" action="" method="post">
                <div class="w50">
                    <input type="text" id="nome_prod" name="nome_prod" placeholder="Nome do Produto:">
                </div><!--w50-->
                <div class="w50">
                    <input type="text" id="preco" name="preco" placeholder="Preço:">
                </div><!--w50-->
                <div class="w50">
                    <input type="text" id="quant" name="quantidade" placeholder="Quantidade:">
                </div><!--w50-->
                <div class="w50">
                    <input type="number" id="cod_barras" name="cod_barras" placeholder="Codigo de Barras:">
                </div><!--w50-->
                <input type="submit" value="Enviar" name="acao">
            </form>
            <div class="clear"></div><!--clear-->
        </div><!--container-->
    </div><!--add-->






    <footer class="rodape">
            <div class="conteudo-rodape">
                <h3>Todos direitos reservados - StarBem<img src="images/copyright.png" alt="copyright"></h3>
                 
                <p>Av.Silvio Andrade n°:555 - São Paulo SP</p>
                <p><a href="faleConosco.html">Fale Conosco</a></p>
            </div>
        </footer>


<script src="js/register.js"></script>
</body>
</html>