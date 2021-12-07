<?php

include "config.php";

//pegando os dados do formulário
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$senha = $_POST['senha'];

//inserindo os dados no BD
$sql = "INSERT INTO usuarios (nome, matricula, email, peso, altura, sexo, data_nascimento, senha) VALUES ('$nome', '$matricula', '$email', '$peso', '$altura', '$sexo', '$data_nascimento', '$senha')";
if ($conn->query($sql) === TRUE) {
    echo "Novo usuário cadastrado com sucesso.";
    header("location: home.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//fechando conexão com o BD 
$conn = null;
echo "<br" . "Conection closed";
