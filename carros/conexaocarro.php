<?php
$svname = "localhost";
$uname = "root";
$psswd = "";
$bdname = "banco";

$conexao = mysqli_connect($svname, $uname, $psswd, $bdname);

if (mysqli_connect_error()){
    echo "Conexão Não Estabelecida" .mysqli_connect_error();
}
else{
    echo "Conexão Estabelecida com sucesso<br>";
}

?>