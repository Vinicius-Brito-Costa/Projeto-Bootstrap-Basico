<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Pagina Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/configuracao_basica.css">
    <style>
        body {
            margin: 0;
        }

        .comentario {
            border-left: 15px solid white;
        }

        .texto {

            color: white;
            padding: 40px;
        }

        main {
            padding-top: 80px;
        }
    </style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php require("pages/header.php") ?>
    <main class="container-fluid mx-0 px-0">
        <div class="comentario bg-dark">
            <div class="texto">
                <h1>Seja bem vindo a Full Stack</h1>
                <p>Com preços imbatíveis e mais de 10 produtos em seu catálogo, o Full Stack! está sempre à frente e traz em primeira mão os melhores lançamentos do mercado mundial de computadores.</p>
                <p>O e-commerce é um dos sites mais acessados do país trazendo produtos e atendimento de alta qualidade.</p>
            </div>
        </div>
        <h1 class="text-white text-center">Produtos em destaque</h1>

    </main>
    <?php include("pages/footer.php"); ?>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>