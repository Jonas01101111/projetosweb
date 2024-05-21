<h3>PHP & MySQL</h3>
<body>
<h3>Novo Produto</h3>
<?php
    include_once('conexaocarro.php');
    $marca = $_POST['marca'];
    $modelo= $_POST['modelo'];
    $cor = $_POST['cor'];
    $ano = $_POST['ano'];
    $valor = $_POST['valor'];
    $sqlinsert = "insert into tabelacarros (marca, modelo, cor, ano, valor)
                values ('$marca', '$modelo', '$cor', '$ano', $valor)";
    $resultado = mysqli_query($conexao, $sqlinsert);
    if (!$resultado){
        die('Query Invalida: ' .mysqli_errno($conexao));
    }else {
        echo "Registro Cadastro com Sucesso";
    }
    mysqli_close($conexao)
?>
<br><br>
<input type="button" onclick="window.location='formcarros.html';" value="Voltar">
</body>