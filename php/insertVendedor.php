<?php 
// Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a intrução do mysql na variavel 
$insert = "INSERT into tb_vendedor value (null, 'Jordan Belfort', '1196967654', 1) ";

//Função query irá a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if($resultado == true) {
    echo "<script>alert('Vendedor cadastrado com sucesso') </script>";
}





?>