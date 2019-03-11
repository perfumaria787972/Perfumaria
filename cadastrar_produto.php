<?php
if(isset($_POST["cadastrar"])){
    
    $descricao = $_POST["descricao"];
    $marca = $_POST["marca"];
    $nome_produto = $_POST["nome_produto"];
    $imagem_produto = $_POST["imagem_produto"];   
    
    $sqlproduto = "insert into produto (descricao,marca,nome_produto,imagem_produto) values ('".$descricao."','".$marca."','".$nome_produto."','".$imagem_produto."',LAST_INSERT_ID()) ";
            
    include("conexao.php");
     
    if(mysqli_query($con, $sqlproduto)){
        echo "cadastro efetuado com sucesso!";
    }else{
        echo "Não foi possivel efetuar o cadastro";
    }    

}
?>

