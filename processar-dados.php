<?php
require_once 'config.php';
//Recebendo os dados vindo do formulário
$tipo = $_POST['tipo'];
$treino = $_POST['treino'];
$observacoes = $_POST['observacoes'];
$concluido = $_POST['concluido'];
$data_atual = date('d/m/Y');


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
//Gravando os dados no banco de dados
$smtp = $conn->prepare("INSERT INTO 21km (tipo, treino, observacoes, concluido, data_atual )VALUES(?,?,?,?,?)");
$smtp->bind_param("sssss",$tipo, $treino, $concluido, $observacoes, $data_atual);

if ($smtp->execute()){
    echo"Dados cadastrados com Sucesso!";    
}else{
    echo"Erro no envio do cadastro! ".$smtp->error;    
}
$smtp->close();
$conn->close();
 
?>