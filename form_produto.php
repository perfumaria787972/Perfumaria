<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="form_produto" method="POST" action="cadastrar_produto.php" enctype="multipart/form-data">
            <fieldset> 
                <legend>Formulário de Cadastro de Produto</legend>
                <label>Nome do Produto</label>
                <input type="text" name="nome_produto">
                <label>Descrição</label>
                <input type="text" name="descricao">
                <label>Marca</label>
                <input type="text" name="marca">
                <label>Vendido/Distribuido por:</label>
                <input type="text" name="empresa">
                <label>Inserir Imagem</label>
                <input type="file" name="imagem_produto">                
                <input type="submit" name="cadastrar">
            </fieldset> 
        </form>
    </body>
</html>

