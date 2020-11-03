<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="javascript/products-main.js" defer></script>
    <link rel="stylesheet" href="css/configuracao_basica.css">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/produtos.css">
</head>

<body>
    <?php require("pages/header.php") ?>
    <nav id="link-barra-produtos" class="d-flex px-0 navbar navbar-expand-md" id="categoriaNav">
        <a class="categorias-drop navbar-toggler text-light bg-dark container-fluid rounded-0" data-toggle="collapse" data-target="#menu_categorias">
            <span>CATEGORIAS</span>
        </a>
        <div id="menu_categorias" class="collapse navbar-collapse justify-content-start">
            <div class="container-fluid bg-dark">
                <a class="btn link-barra text-light" onclick="MostrarApenas('todos')">TODOS</a>
            </div>
            <div class="container-fluid bg-dark dropdown">
                <a class="btn link-barra dropdown-toggle text-white" id="dropdown_hardware" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="MostrarSubCategorias('hardware'), MostrarApenas('hardware')">HARDWARE</a>
                <ul class="sub-link dropdown-menu bg-dark" aria-labelledby="dropdown_hardware">
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('hardware', 'cpu')">CPU</li>
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('hardware', 'gpu')">GPU</li>
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('hardware', 'memoria')">MEMÓRIA</li>
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('hardware', 'mobo')">MOBO</li>
                </ul>
            </div>
            <div class="container-fluid bg-dark dropdown">
                <a class="btn link-barra dropdown-toggle text-white" id="dropdown_monitores" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="MostrarSubCategorias('monitores'), MostrarApenas('monitores')">MONITORES</a>
                <ul class="sub-link dropdown-menu bg-dark" aria-labelledby="dropdown_monitores">
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('monitores', 'res_1080p')">1080</li>
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('monitores', 'res_4k')">4k</li>
                </ul>
            </div>
            <div class="container-fluid bg-dark dropdown">
                <a class="btn link-barra dropdown-toggle text-white" id="dropdown_mouses" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="MostrarSubCategorias('mouses'), MostrarApenas('mouses')">MOUSES</a>
                <ul class="sub-link dropdown-menu bg-dark" aria-labelledby="dropdown_mouses">
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('mouses', 'com_fio')">COM FIO</li>
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('mouses', 'sem_fio')">SEM FIO</li>
                </ul>
            </div>
            <div class="container-fluid bg-dark dropdown">
                <a class="btn link-barra dropdown-toggle text-white" id="dropdown_teclados" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="MostrarSubCategorias('teclados'), MostrarApenas('teclados')">TECLADOS</a>
                <ul class="sub-link dropdown-menu bg-dark" aria-labelledby="dropdown_teclados">
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('teclados', 'com_fio')">COM FIO</li>
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('teclados', 'sem_fio')">SEM FIO</li>
                </ul>
            </div>
            <div class="container-fluid bg-dark dropdown">
                <a class="btn link-barra dropdown-toggle text-white" id="dropdown_consoles" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="MostrarSubCategorias('consoles'), MostrarApenas('consoles')">CONSOLES</a>
                <ul class="sub-link dropdown-menu bg-dark" aria-labelledby="dropdown_consoles">
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('consoles', 'playstation')">Playstation</li>
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('consoles', 'xbox')">Xbox</li>
                    <li class="dropdown-item text-light" onclick="MostrarApenasSub('consoles', 'nintendo')">Nintendo</li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container-fluid">
        <div class="produtos row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row">
            <?php include("pages/product_load.php") ?>
        </div>
    </main>
    <?php include("pages/footer.php"); ?>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>