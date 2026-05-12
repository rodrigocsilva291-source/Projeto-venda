<?php 
// Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a intrução do mysql na variavel 
$insert = "insert into tb_cliente value (null, 'pixelmemories', '11958545875', 'lucas' ) ";

//Função query irá a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if($resultado == true) {
    echo "<script>alert('Cliente cadastrado com sucesso')</script>";
}





?>