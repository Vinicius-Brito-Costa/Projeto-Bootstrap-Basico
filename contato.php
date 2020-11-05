<!DOCTYPE html>
<html lang="pt-br">
<?php
include("pages/conexao.php");
if (isset($_POST['nome']) && isset($_POST['mensagem']) && isset($_POST['email'])) {
    $usuario = $_POST['nome'];
    $mensagem = $_POST['mensagem'];
    $email = $_POST['email'];
    if (!empty($usuario) && !empty($mensagem) && !empty($email)) {

        /* Passei quase uma hora e o erro era as aspas na definição dos campos abaixo */
        $sql = "INSERT INTO feedback (id_mensagem, usuario, mensagem, email, dia) VALUES (null, '$usuario', '$mensagem', '$email', now())";
        mysqli_query($conexao, $sql);
        header("Location: contato.php");
        mysqli_close($conexao);
    }
}
?>

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" async></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/configuracao_basica.css">
    <link href="css/contato.css" rel="stylesheet">
</head>

<body>
    <?php require("pages/header.php") ?>
    <main>
        <div class="container-fluid">
            <form class="formulario form-group col align-center align-self-center justify-content-middle" action="" method="post">
                <div class="row">
                    <div class="w-75 col">
                        <h1 class="text-white">Deixe sua mensagem</h1>
                        <input class="input-contato form-control my-2 shadow-sm rounded" type="text" name="nome" id="nome" placeholder="Nome Completo">
                        <input class="input-contato form-control my-2 shadow-sm rounded" type="email" name="email" id="email" placeholder="Endereço de Email">
                        <textarea class="input-contato itens form-control shadow-sm rounded" style="resize: none" rows='5' placeholder="Mensagem" name="mensagem"></textarea>
                        <input type="checkbox" class="d-inline" onchange="document.getElementById('botao').disabled = !this.checked;">
                        <small class="form-text text-light form-check-label d-inline">Concordo com as politicas de publicidade do site.</small>
                    </div>
                    <img class="img-fluid d-none d-md-inline mx-4 px-4" src="imagens/icones/iconCaneta.svg">
                </div>
                <button id="botao" disabled class="btn btn-lg btn-primary font-weight-bold" type="submit">Enviar</button>
            </form>

        </div>
    </main>
    <?php include("pages/footer.php"); ?>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>