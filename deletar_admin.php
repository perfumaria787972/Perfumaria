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

   echo "<b>Deletar administrador de código:".$cod."</b></br></br>";

    $query ="SELECT * FROM g3_administrador WHERE cod_admin = $cod";
    
    $result = mysqli_query($con,$query);
 

    if ($result->num_rows > 0) {
        echo "<form method='post' action='deletar_admin_confi.php'>";
        while($linha = $result->fetch_assoc()) {

        	echo "<label>Nome do admin:</label><input type='text' name='nome' readonly='readonly' value='".$linha["nome_admin"]."'></input><br>";
        	echo "<label>Sobrenome do admin:</label><input type='text' name='sobrenome' readonly='readonly' value='".$linha["sobrenome_admin"]."'></input><br>";
        	
        	echo "<label>Código do ADM:</label><input type='text' name='cod_admin' readonly='readonly' value='".$linha["cod_admin"]."'></input><br>";
        	echo "<input type='submit' value='Deletar'></input>";

        }
            echo "</form>";
    } else {
        echo "<b class='erro'>Sem resultados</b><br><br>";
    }
?>


</body>
</html>