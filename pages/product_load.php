<?php
include("conexao.php");
$sql = "select * from produtos";
$resultado = mysqli_query($conexao, $sql);
while ($row = mysqli_fetch_assoc($resultado)) {
    $nome = $row['nome'];
    $preco_antigo = $row['preco_antigo'];
    $preco_atual = $row['preco_atual'];
    $promo = $row['promocao'];
    if ($preco_antigo == "") {
        $preco_antigo = "&nbsp;";
    } 
    else 
    {
        $preco_antigo = "R$" . $preco_antigo;
    }
    if ($promo != "") 
    {
        $promo = "-" . $promo . "%";
    }
    else{
        $promo = "";
    }

    $id = $row['categoria_produto'];
    $classe = $row['sub_categoria'];
    $endereco_imagem = $row['nome_imagem'];
?>
    <div class='box-produtos <?php echo $classe ?> col' id='<?php echo $id ?>'>
        <form onclick="GoTo('product.php'), this.submit()" method="GET" action="product.php">
            <img class="img-fluid" src="imagens/produtos/<?php echo $endereco_imagem ?>">
            <div class="box-descricao text-light px-2">
                <span class="preco-antigo text-danger d-block"><?php echo $preco_antigo ?></span>
                <span class="nome-produto d-block text-nowrap overflow-hidden"><?php echo $nome ?></span>
                <ul class="list-unstyled d-flex mx-0 px-0 container-fluid text-center">
                    <li class="preco-atual text-light mx-0 pl-1 px-0 py-0 container-fluid"><?php echo "R$" . $preco_atual ?></li>
                    <li class="promo bg-danger mx-0 container-fluid-sm px-1"><?php echo $promo ?></li>
                </ul>
                <input typer="hidden" name="id_produto" style="display: none" value="<?php echo $row['id_produto'] ?>"></input>
            </div>
        </form>
    </div>
<?php

}
mysqli_close($conexao);
?>