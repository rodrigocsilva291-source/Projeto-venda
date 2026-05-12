<?php 
// Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a intrução do mysql na variavel 
$insert = "INSERT into tb_venda value (null, '2026/03/04', 1, '10', 3, 1, 1) ";

//Função query irá a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if($resultado == true) {
    echo "<script>alert('Venda cadastrada com sucesso') </script>";
}





?>