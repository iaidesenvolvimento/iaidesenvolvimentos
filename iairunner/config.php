<?php
//Configurações de credenciais
$server= 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'iaidesenvolvimentos';

//Configurações de conexão ao banco de dados
$conn = new mysqli($server, $usuario, $senha, $banco);

//Verifica a conexão, caso erro, da uma mensagem
if($conn->connect_error){
    die("Falha na conexão com o banco de dados: ".$conn->connect_error);
}

?>