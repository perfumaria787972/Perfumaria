<?php
include("conexao.php");
if(isset($_POST["cadastrar"])){
    
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $situacao = "ativo";
    
    $sqlcadendereco = "insert into g3_endereco (logradouro,numero,bairro,cep) values('$logradouro','$numero','$bairro','$cep') ";
    $sqladmin = "insert into g3_administrador (nome_admin,sobrenome_admin,login,senha,situacao,cod_end) values ('$nome','$sobrenome','$login','$senha','$situacao',LAST_INSERT_ID()) ";
            
   
   if(mysqli_query($con, $sqlcadendereco)){
    if(mysqli_query($con, $sqladmin)){
        echo "cadastro efetuado com sucesso!";
    }else{
        echo "Não foi possivel efetuar o cadastro";
    }    
}
}
?>