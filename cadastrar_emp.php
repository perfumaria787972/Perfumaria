<?php
include ("conexao.php");

if(isset($_POST["cadastrar"])){
    
    $nome_emp= $_POST["nome_emp"];
    $cnpj= $_POST["cnpj"];
    $logradouro= $_POST["logradouro"];
    $cep= $_POST["cep"];
    $numero= $_POST["numero"];
    $bairro= $_POST["bairro"];
    
    $sqlendereco = "insert into g3_endereco (logradouro,numero,bairro,cep) values('$logradouro','$numero','$bairro','$cep') ";
    $sqlperfil= "insert into g3_empresa (nome_empresa,cnpj,cod_end) values ('$nome_emp','$cnpj',LAST_INSERT_ID())";
            
    if( mysqli_query($con, $sqlendereco) ){
        if(mysqli_query($con, $sqlperfil)){
            echo "cadastro efetuado com sucesso!";
        }else{
            echo "Não foi possivel efetuar o cadastro";
        }    
    }
}
?>
