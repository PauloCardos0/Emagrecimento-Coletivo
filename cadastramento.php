<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula= $_POST['matricula'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$sexo = $_POST['sexo'];


//Conectanco ao Banco de dados
$hostname = "localhost";
$bancodedados = "emagrecimento_coletivo";
$usuario = "root";
$senha = "";

$conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados );

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo"-------------------------------------------------"."<br>";
echo "Conectado com sucesso". "<br>";
echo"-------------------------------------------------"."<br>";


$sql = "INSERT INTO Cadastramento (nome, email, matricula, peso, altura, sexo) VALUES ('$nome', '$email', '$matricula', '$peso', '$altura', '$sexo')";
if (mysqli_query($conn, $sql)) {
      echo"-------------------------------------------------"."<br>";
      echo "<strong>Os dados foram cadastrados</strong>"."<br>";
      echo"-------------------------------------------------";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header ("location: index.html");

?>