<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form name="form_cadastraradmin" method="POST" action="cadastrar_admin.php">
            <fieldset> 
                <legend>Formulário de Cadastro do Admin</legend>
                <label>Nome</label>
                <input type="text" name="nome">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome">
                <label>Logradouro</label>
                <input type="text" name="logradouro">
                <label>Número</label>
                <input type="text" name="numero">
                <label>Bairro</label>
                <input type="text" name="bairro">
                <label>Cep</label>
                <input type="text" name="cep">
                <label>Login</label>
                <input type="email" name="login">
                <label>senha</label>
                <input type="password" name="senha">
                <input type="submit" name="cadastrar">
            </fieldset> 
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>

