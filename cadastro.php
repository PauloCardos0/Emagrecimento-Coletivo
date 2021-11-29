<?php

    $servername = "127.0.0.1:3306";
    $username = "Pablo Santos";
    $password = "X1624TMGMMySQLPablo$";
    $dbname = "cadastro";

    //pegando os dados do formulário
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];


    //conectando com o BD e inserindo os dados do cadastro
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuario (nome, matricula, email, peso, altura, sexo, senha) VALUES ('$nome', '$matricula', '$email', '$peso', '$altura', '$sexo', '$senha')";
        $conn->exec($sql);
        echo "Novo usuário cadastrado";
    } catch (PDOException $e) {
        echo "Error: " . "<br>" . $e->getMessage();
    }


    //fechando conexão com o BD 
    $conn = null;
    echo "<br" ."Conection closed";
    header ("location: index.html");

?>