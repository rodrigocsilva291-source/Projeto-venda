<?php
//informações necessarios para conexão com o banco
$servidor ='localhost';
$usuario_banco ='root';
$semha_banco = 'root';
$nm_banco = 'bd_vendas';

//função mysql para conexão com o banco de dados

$conexao = new mysqli($servidor,$usuario_banco,$semha_banco,$nm_banco);

if($conexao->connect_error){
    echo "Erro na Conexão";
}



?>