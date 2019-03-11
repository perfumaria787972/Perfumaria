<html>
	<head>
		<title>Editar o registro do aluno</title>
		<meta charset='utf-8'/>

  
	</head>

	<body>
<?php


    include('conexao.php');

    $cod = $_GET['id'];
    echo $cod;

   echo "<b>Editando o administrador de código:".$cod."</b></br></br>";

    $query ="SELECT * FROM g3_administrador WHERE cod_admin = $cod";
    
    $result = mysqli_query($con,$query);
 

    if ($result->num_rows > 0) {
        echo "<form method='post' action='editar_admin_confi.php'>";
        while($linha = $result->fetch_assoc()) {

        	echo "<label>Nome do ADM:</label><input type='text' name='nome' value='".$linha["nome_admin"]."'></input><br>";
        	echo "<label>Sobrenome do ADM:</label><input type='text' name='sobrenome' value='".$linha["sobrenome_admin"]."'></input><br>";
        	
        	echo "<label>Código do aluno:</label><input type='text' name='cod_aluno' readonly='readonly' value='".$linha["cod_admin"]."'></input><br>";
        	echo "<input type='submit' value='salvar'></input>";

        }
            echo "</form>";
    } else {
        echo "<b class='erro'>Sem resultados</b><br><br>";
    }




?>


</body>
</html>