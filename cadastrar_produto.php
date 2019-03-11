<?php
include ("conexao.php");

if(isset($_POST["cadastrar"])){
    
    $nome_produto = $_POST["nome_produto"];
    $descricao = $_POST["descricao"];
    $marca = $_POST["marca"];
    $nome_emp = $_POST["empresa"];
    
    
    $sqlempresa = "select * from g3_empresa where nome_empresa='$nome_emp'";
    $consultarEmp = mysqli_query($con, $sqlempresa);
    
    if (mysqli_num_rows($consultarEmp) == 0){
        echo "<h4>Nenhuma empresa registrada com esse nome foi encontrado!</h4>";
    }else{
            while ($linha = mysqli_fetch_array($consultarEmp)) {
                $cod_empresa = $linha["cod_empresa"];
                $nome_empresa = $linha["nome_empresa"];
                $cnpj = $linha["cnpj"];
            }
        }
        echo $cod_empresa;

        $sqlproduto = "insert into g3_produto (nome_produto,descricao,marca,cod_empresa) values ('$nome_produto','$descricao','$marca','$cod_empresa') ";
            
        if(mysqli_query($con, $sqlproduto)){
                echo "cadastro efetuado com sucesso!";
            }else{
                echo "Não foi possivel efetuar o cadastro";
            }    
        
}
?>
