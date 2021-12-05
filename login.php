<?php

include "config.php";

if (isset($_POST['submeter'])) {

    $matricula = mysqli_real_escape_string($conn, $_POST['matricula']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    if ($matricula != "" && $senha != "") {
        $sql = "SELECT COUNT(*) AS cntUser FROM usuarios WHERE matricula='".$matricula."' AND senha='".$senha."'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['matricula'] = $matricula;
            header("location: home.html");
        } else {
            header("location: loginIncorrect.html");
        }
    }

}

?>