<?php
include "config.php";
if (!$conn){
    die("falha na conexão {mysqli_connect_error(){");
}
// recebe os dados do formulário
$nome = 'teste nome';
$dtnasc = '2007-02-19';
$celular ='81';
$email = 'allaninha2018@gmail.com';
$ra = '000000';
$endereco = 'rua josé reginaldo dos santos';
$num_end = '55';
$bairro = 'jardim paulista baixo';
$cidade = 'paulista ';

//cria variavel para inserir o registro
$sql = "INSERT INTO `leitores`(`Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Endereco`, `NumEnd`, `Bairro`, `CidadeUF`) values 
('$nome', '$dtnasc', '$celular', '$email', '$ra', '$endereco', '$num_end', '$bairro', '$cidade')";

// executa a consulta SQL. Se falhar, exibe o erro do banco de dados 
$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $db));

if($query){
    echo "<center>";
    echo "cadastro realizado com sucesso!!<br>";
    echo "<a href= 'index.php'><button title='home page'>voltar</button></a>";
    echo "</center>";
} else {
    echo "<center>";
    echo "<a href= 'index.php'><button title='home page'>voltar</button></a>";
    echo "</center>";
}
?>