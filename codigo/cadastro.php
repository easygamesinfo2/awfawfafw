<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <title>EG</title>

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="semantic/semantic.css">


</head>
<body>
<script type="text/javascript" src="semantic/semantic.min.js"></script>


<div class="ui middle aligned center aligned grid">
    <div class="column">

        <h2 class="ui inverted image header">
            <div class="content">
                <img src="imagenseg/logologin.png">
            </div>
        </h2>

        <form method="post" class="ui large form">

            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="nome" placeholder="nome" required="">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="mail icon"></i>
                        <input type="email" name="email" placeholder="email" required="">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="senha" placeholder="senha" required="">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="confirma" placeholder="confirma" required="">
                    </div>
                </div>
                    <div>
                         <button type="submit"  value="inserir" name="inserir" id="inserir" class="ui  grey button" style="margin-top: 2%; color: #2B2B2B">Enviar</button>
                    </div>
            </div>
                
            <div class="ui error message"></div>

        


    </div>
</div>

<?php

require_once "modelos/crud_usuario.php";

        if (isset($_POST['inserir'])) {
            $nome_usuario = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $novo_usuario = new Usuario($nome,$email,$senha);
            $crud = new crud_usuario();
            $crud->InsertUsuario($novo_usuario);
            header('Location: indexLogado.html');
        }

   

?>

</form>

<style type="text/css">
    body {
        background-color: #191919;
    }
    body > .grid {
        height: 100%;
    }
    .image {
        margin-top: -100px;
    }
    .column {
        max-width: 450px;
    }
</style>


</body>
</html>