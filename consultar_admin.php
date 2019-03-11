<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>



<fieldset>
<legend>Lista de Registros</legend>

<table border="1" width="100%">
 <tr>
      <th>Código do ADM</th>
      <th>Nome do ADM</th>
      <th>Sobrenome do ADM</th>
      <th></th>
      <th></th>
 </tr>
 
<?php
    

	if(isset($_POST["consultar"])){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
           
         include('conexao.php');
	
            $sqlconsultaadmin = "select * from g3_administrador where nome_admin='$nome' or sobrenome_admin='$sobrenome'"; 
            $consultaadmin = mysqli_query($con,$sqlconsultaadmin);
            
           $i = 0;
		if (mysqli_num_rows($consultaadmin) == 0){
			echo "<h4>Nenhum Registro Encontrado!</h4>";
		}
		else{
		while ($linha = mysqli_fetch_array($consultaadmin)) {
		   $cod_admin = $linha["cod_admin"];
		   $nome = $_POST['nome'];
		   $sobrenome = $_POST['sobrenome'];
		   	
		   if ($i % 2 == 0){
			  $cor = "#DDDDDD";
		   }
		   else{
			  $cor = "#FFFFFF";
		   }
		
    ?>
		<tr bgcolor="<?php echo $cor; ?>"
                    <td></td>
                    <td><?php echo $cod_admin; ?></td>
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $sobrenome; ?></td>
                   
                    <td><?php echo "<a href='editar_admin.php?id=".$linha["cod_admin"]."'>Editar</a>";?></td>
                    <td><?php echo "<a href='deletar_admin.php?id=".$linha["cod_admin"]."'>Deletar</a>";?></td>

		</tr>
		 
		<?php
		   $i++;
                   
		}
	}
  
        }    
?>
</table>
    </body>
</html>
