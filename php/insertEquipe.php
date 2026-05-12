<?php 
// Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a intrução do mysql na variavel 
$insert = "insert into tb_equipe value (null, 'JackBoys', 'Alphavile') ";

//Função query irá a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if($resultado == true) {
    echo "<script>alert('Equipe cadastrada com sucesso') </script>";
}





?>