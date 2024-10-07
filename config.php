<?php
// configuração do banco de dados
$db_host = "localhost"; // hostname do servidor de banco de dados
$db_user = "root"; // nome de usuário para conectar ao banco de dados 
$db_pass = ""; // senha para conectar ao banco de dados (vazio signifca sem senha)
$db_name = "biblioteca"; // nome do banco de dados a conectar 

// conectar ao banco de dados
$conn = new mysqli($db_host, $db_user, $db_pass,$db_name);
// vereficar se a conexão foi bem-sucedida 
if ($conn->connect_error){
    // se houver um erro, exibir a mensagem de erro e encerrar a execução do script
    // a seta -> é usada para acessar propriedades e métodos de objetivos em PHP, tornando o código mais legível e fácil de manter 
    die("conexão falhou: {$conn->connect_error}");
    }
    else {
        echo "PARABÉNS!!! A conexão ao banco de dados
        ocorreu normalmente!";

    }