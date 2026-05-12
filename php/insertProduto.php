<?php 
// Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a intrução do mysql na variavel 
$insert = "insert into tb_produto value (null, 'camera', '1000') ";

//Função query irá a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if($resultado == true) {
    echo "<script>alert('Produto cadastrado com sucesso') </script>";
}





?>