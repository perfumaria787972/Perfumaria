<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
    include ('navbar.php');
    include('conexao.php');
    
    $sqlproduto = "SELECT * FROM g3_produto"; //consultei no bd
    $queryproduto = mysqli_query($con, $sqlproduto);//usa o sql  acima no BD
    if (mysqli_num_rows($queryproduto) == 0){
        echo "<h4>Nenhuma empresa registrada com esse nome foi encontrado!</h4>";
    }else{
            while ($linha = mysqli_fetch_array($queryproduto)) {
                $cod_produto = $linha["cod_produto"];
                $nome_produto = $linha["nome_produto"];
                $descricao = $linha["descricao"];
                $marca = $linha["marca"];
                
        echo'<div class="container-fluid align-self-lg-center" id="corpo">';
        echo'<div class="row justify-content-lg-around">';
        echo'<div class="card" style="width: 18rem;">';
        echo'<img src="img/masculino10.jpg" class="card-img-top" alt="imagem-perfume">';
        echo'<div class="card-body">';
        echo'<h5 class="card-title">'.$linha["nome_produto"].'</h5>';
        echo'<p class="card-text" >'.$linha["descricao"].'</p>';
         echo'<p class="card-text" >'.$linha["marca"].'</p>';
        echo'</div>';
        echo'</div>';
            }
        }
    //$linha = mysqli_num_rows($queryproduto);//separa os resultados em linha e os numera
    //$arrayproduto = mysqli_fetch_array($con, $queryproduto);//cria arrays para os resultados da pesquisa
    //echo $linha["nome_produto"]; //exibe um resultado especifico da array
    
    /*while ($row = mysql_fetch_array($con, $queryproduto)) {
        echo $row["descricao"];
        echo'<div class="card" style="width: 18rem;">';
        echo'<img src="img/masculino10.jpg" class="card-img-top" alt="imagem-perfume">';
        echo'<div class="card-body">';
        echo'<h5 class="card-title">Shalimar</h5>';
        echo'<p class="card-text" >$row["descricao"]</p>';
        echo'</div>';
        echo'</div>';
    }*/
?>
    </body>
</html>
