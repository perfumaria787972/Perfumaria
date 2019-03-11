<html>
	<head>
		<title>config edit</title>
		<meta charset='utf-8'/>
	</head>

	<body>
<?php


    include('conexao.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cod = $_POST['cod_admin'];

    echo "Nome: ".$nome."</br>Sobrenome: ".$sobrenome."</br></br>";

    $adc = "UPDATE g3_administrador SET situacao='inativo' WHERE cod_admin='$cod'"; 

    $ins = mysqli_query($con,$adc);

    if($ins)
    {
    echo "<b style='color:green'>ADM deletado com sucesso!</b> </br><a href='ver.php'>Voltar</a>";
    }
    else
    {
    echo "Erro </br><a href='ver.php'>Voltar</a>";

    }
?>
	</body>
</html>