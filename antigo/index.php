<?php
$meta = $_POST['meta'];


//Conectanco ao Banco de dados
$hostname = "localhost";
$bancodedados = "emagrecimento_coletivo";
$usuario = "root";
$senha = "";

$conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados );

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO Meta (meta_emagrecimento) VALUES ('$meta')";
if (mysqli_query($conn, $sql)) {
      echo"-------------------------------------------------"."<br>";
      echo "<strong>Os dados foram cadastrados</strong>"."<br>";
      echo"-------------------------------------------------";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header ("location: coletivo.html");


?>