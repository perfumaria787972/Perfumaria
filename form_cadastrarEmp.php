<?php
include 'bootstrap.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="form_cadastrarEmp" method="POST" action="cadastrar_emp.php" enctype="multipart/form-data">
            <fieldset> 
                <legend>Perfil da empresa</legend>
                <label>Nome da empresa</label>
                <input type="text" name="nome_emp">
                <label>cnpj</label>
                <input type="text" name="cnpj">
            </fieldset>
            <fieldset>
                <legend>Endereço</legend>
                <label>Logradouro</label>
                <input type="text" name="logradouro">
                <label>Número</label>
                <input type="text" name="numero">
                <label>Bairro</label>
                <input type="text" name="bairro">
                <label>Cep</label>
                <input type="text" name="cep">
            </fieldset>
            <input type="submit" name="cadastrar">
        </form>
    </body>
</html>

