<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/configuracao_basica.css">
    <style>
        .parallax {
            text-align: center;
            vertical-align: middle;
            color: white;
            /* The image used */
            background-image: url("imagens/index/bg1.png");

            /* Full height */
            height: 20vw;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax h1 {
            font-size: 10vw;
        }

        .parallax span {
            font-size: 2vw;
            display: block;
        }

        .parallax2 {
            text-align: center;
            vertical-align: middle;
            color: white;
            /* The image used */
            background-image: url("imagens/index/mobo.jpg");

            /* Full height */
            height: 20vw;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax2 span {
            vertical-align: middle;
            font-size: 5vw;
        }

        .comentario {
            border-left: 4px solid white;
            border-right: 4px solid white;
        }

        .texto {

            color: white;
            padding: 40px;
        }

        main {
            padding-top: 80px;
            min-height: auto;
        }
    </style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php require("pages/header.php") ?>
    <main class="container-fluid mx-0 px-0">
        <div>
            <div class="parallax my-auto justify-content-center">
                <h1 class="align-middle">Full Stack</h1>
                <span class="align-middle">Se alguem está procurando nós estamos vendendo.</p>
            </div>
        </div>
        <div class="comentario bg-dark">
            <div class="texto">
                <h1>Seja bem vindo a Full Stack</h1>
                <p>Com preços imbatíveis e mais de 10 produtos em seu catálogo, o Full Stack! está sempre à frente e traz em primeira mão os melhores lançamentos do mercado mundial de computadores.</p>
                <p>O e-commerce é um dos sites mais acessados do país trazendo produtos e atendimento de alta qualidade.</p>
            </div>
        </div>
        <div>
            <div class="parallax2 row justify-items-middle">
                <span class="col align-middle">PLACEHOLDER</p>
            </div>
        </div>

    </main>
    <?php include("pages/footer.php"); ?>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>