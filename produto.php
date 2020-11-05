<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8mb4">
    <title>Full Stack Eletro</title>
    <link href="css/configuracao_basica.css" rel="stylesheet">
    <link href="css/produto.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" async></script>
    <script src="javascript/pagina-produto.js" defer></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<?php
include("pages/conexao.php");
$id = $_GET['id_produto'];
$sql = "select * from produtos where id_produto = $id";
$query = $conexao->query($sql)->fetch_assoc();
$nome = $query['nome'];
$descricao = $query['descricao'];
$preco_antigo = $query['preco_antigo'];
$preco_atual = $query['preco_atual'];
$link_imagem = $query['nome_imagem'];
$promo = ($query['promocao'] / 100);
$frete = 10;

if (isset($_POST['cep']) && isset($_POST['quantidade'])) {
    $usuario = "Usuario Padrão";
    $endereco = $_POST['endereco'] . ", " . $_POST['numero'] . ", " . $_POST['cidade'] . " / " . $_POST['estado'] . " - " . $_POST['cep'];
    $telefone = $_POST['telefone'];
    $id_produto = $id;
    $valor_unitario = $preco_atual;
    $quantidade = $_POST['quantidade'];
    $valor_total = ($valor_unitario * $quantidade) + $frete;
    /* Passei quase uma hora e o erro era as aspas na definição dos campos abaixo */
    $sql = "INSERT INTO pedidos (id_pedido, cliente, endereco, telefone, id_produto, valor_unitario, quantidade, valor_total) VALUES (null, '$usuario', '$endereco', '$telefone', '$id_produto', '$valor_unitario', '$quantidade', '$valor_total')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>

<body>
    <?php require("pages/header.php") ?>
    <main>
        <div class="background">
            <div class="conteudo">
                <form class="d-flex justify-content-center caixa-de-compras" action="" method="POST">
                    <div class="compra bg-white container row border border-secondary rounded-lg mb-4 shadow-sm">
                        <div class="d-flex flex-column flex-md-row justify-content-center">
                            <div class="main-box container col-6 w-100 w-md-50 mw-100 mw-md-50 mt-3 mr-2 px-0">
                                <div class="imagem-produto col container-fluid">
                                    <img src='imagens/produtos/<?php echo $link_imagem ?>' class="img-fluid">
                                </div>
                            </div>
                            <div class="info col-6 w-100 w-md-50 mw-100 justify-content-end rounded-lg border mt-3">
                                <div class="nome-produto font-weight-bold mt-2"><?php echo $nome ?></div>
                                <div class="precos form-group">
                                    <div class='valor-antigo'>De <p class="text-danger font-weight-bold">R$<?php echo $preco_antigo ?></p> por</div>
                                    <div class='valor-unidade text-success font-weight-bold'>R$<?php echo $preco_atual ?></div>
                                    <span class="economize d-flex">Economize <p class="text-success font-weight-bold"> R$<?php echo round($promo * $preco_antigo, 2) ?></p>!</span>
                                    <div class="valor-frete text-dark">Frete: R$10,00</div>
                                    <div class='valor-parcelado font-weight-bold'>6x <p>R$<?php echo round($preco_atual / 6, 2) ?></p>
                                    </div>
                                    <label for="quantidade" class="quantidade font-weight-bold">Quantidade: </label>
                                    <input id="quantidade" class="font-weight-bold form-control-sm" name="quantidade" type="number" value="1" min="1" max="9" placeholder="" onkeyup="PreencherValorTotal(<?php echo $preco_atual ?>)" onclick="PrecificarTotal(<?php echo $preco_atual ?>)"><br>
                                </div>
                                <span class="d-flex total font-weight-bold">Total </span>
                                <div class='valor-total d-flex font-weight-bold text-success'>R$ <?php echo $preco_atual ?></div>
                                <span class="frete-mensagem font-weight-bold">Frete não incluso.</span>
                                <input type="hidden" name="id_produto" id="id_produto" value=<?php echo $id ?>>
                                <div class="botao d-flex mb-3"><button class="btn btn-success btn-lg border border-dark shadow-sm font-weight-bold" type="submit" onclick="alert('Seu pedido foi efetuado!')">COMPRAR</button></div>
                            </div>
                        </div>
                        <div class="row mt-2 mb-3 mx-1 mx-md-0 flex-column flex-md-row justify-content-center">
                            <div class="textos col form-group my-auto rounded-lg border w-100 mw-100 w-md-50 h-100 mr-2">
                                <div class="descricao overflow-auto my-4"><?php echo $descricao ?></div>
                            </div>
                            <div class="endereco col form-group rounded-lg border w-100 mw-100 w-md-50 h-100 my-auto">
                                <div class="my-4 mx-1">
                                    <input id="cep" name="cep" class="form-control form-control-sm endereco-itens" onkeydown="AutoPreencherEndereco(this.value)" type="number" placeholder="Cep">
                                    <div class="row mx-1 w-100 mx-auto">
                                        <input type="text" id="endereco" name="endereco" class="col col-9 col-md-10 col-lg-11 form-control form-control-sm endereco-itens" placeholder="Endereco">
                                        <input type="text" id="numero" name="numero" class="col col-3 col-md-2 col-lg-1 form-control form-control-sm endereco-itens" placeholder="N°">
                                    </div>
                                    <input type="text" id="estado" name="estado" class="form-control form-control-sm endereco-itens" placeholder="Estado">
                                    <input type="text" id="cidade" name="cidade" class="form-control form-control-sm endereco-itens" placeholder="Cidade">
                                    <input type="text" id="telefone" name="telefone" class="form-control form-control-sm endereco-itens" placeholder="(11) 2222-2222">
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </main>
    <?php include("pages/footer.php"); ?>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>