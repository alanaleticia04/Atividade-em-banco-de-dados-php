<?php
include "config.php";
if (!$conn){
    die("falha na conexão {mysqli_connect_error(){");
}
// recebe os dados do formulário
$nome = '';
$dtnasc = '';
$celular = '';
$email = '';
$ra = '';
$endereço = '';
$num_end = '';
$bairro = '';
$cidade = '';

//cria variavel para inserir o registro
$sql = "";