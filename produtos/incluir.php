<h3>PHP & MySQL</h3>
<body>
<h3>Novo Produto</h3>
<?php
    include_once('conexao.php');
    $codigo = $_POST['codigo'];
    $produto= $_POST['produto'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $sqlinsert = "insert into tabelaimg (codigo, produto, descricao, data, imagem, valor)
                values ('$codigo', '$produto', '$descricao', '$data', '$imagem', $valor)";
    $resultado = mysqli_query($conexao, $sqlinsert);
    if (!$resultado){
        die('Query Invalida: ' .mysqli_errno($conexao));
    }else {
        echo "Registro Cadastro com Sucesso";
    }
    mysqli_close($conexao)
?>
<br><br>
<input type=" button" onclick="window.location='formprodutos.html';" value="Voltar">
</body>