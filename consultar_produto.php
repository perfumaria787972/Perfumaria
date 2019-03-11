<?php
    include 'bootstrap.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body >
        <fieldset>
        <legend>Lista de Registros</legend>
        <table  border="1" width="100%">
         <tr>
              <th>Código do Produto</th>
              <th>Nome do Produto</th>
              <th>Descricao</th>
              <th>Marca</th>
              <th colspan="2">Ação</th>
              <th>PDF</th>
         </tr>

        <?php
                include('conexao.php');

                if(isset($_POST["consultar"])){
                    $nome = $_POST['buscar'];
                    $marca = $_POST['buscar'];
                    $empresa = $



                    $sqlconsultaraluno = "SELECT * FROM aluno WHERE nome_aluno='$nome' or sobrenome_aluno='$sobrenome'"; 
                    $consultaraluno = mysqli_query($conexao,$sqlconsultaraluno);

                   $i = 0;
                        if (mysqli_num_rows($consultaraluno) == 0){
                            echo "<h4>Nenhum Registro Encontrado!</h4>";
                        }else{
                            while ($linha = mysqli_fetch_array($consultaraluno)) {
                               $cod_aluno = $linha["cod_aluno"];
                               $nome = $linha["nome_aluno"];
                               $sobrenome = $linha["sobrenome_aluno"];

                                if ($i % 2 == 0){
                                       $cor = "#DDDDDD";
                                }
                                else{
                                       $cor = "#FFFFFF";
                                }

                                ?>
                            <tr bgcolor="<?php echo $cor; ?>"
                                <td></td>
                                <td><?php echo $cod_produto; ?></td>
                                <td><?php echo $nome_produto; ?></td>
                                <td><?php echo $descricao; ?></td>
                                <td><?php echo $marca; ?></td>
                                <td><?php echo "<a href='editar_aluno.php?id=".$linha["cod_aluno"]."'>Atualizar</a>";?></td>
                                <td><?php echo "<a href='deletar_aluno.php?id=".$linha["cod_aluno"]."'>Deletar</a>";?></td>
                                <td><?php echo "<a href='gerarpdf.php?id=".$linha["cod_aluno"]."' target='_blank'>Gerar relatório PDF</a>";?></td>
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
