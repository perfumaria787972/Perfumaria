<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form name="form_produto" method="POST" action="cadastrar_produto.php">
            <fieldset> 
                <legend>Formulário de Cadastro de Produto</legend>
                <label>Descrição</label>
                <input type="text" name="descricao">
                <label>Marca</label>
                <input type="text" name="marca">
                <label>Nome do Produto</label>
                <input type="text" name="nome_produto">
                <label>Inserir Imagem</label>
                <input type="text" name="imagem_produto">                
                <input type="submit" name="cadastrar">
            </fieldset> 
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>

