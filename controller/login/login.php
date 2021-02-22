<?php

    include_once("../../model/database/_connection.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM Convidados WHERE emailConvidado = '{$email}' AND senhaConvidado = '{$password}';";
    $result = mysqli_query($connect, $sql);
    $login = mysqli_fetch_assoc($result);

    session_start();
    
    if($login){
        $_SESSION["idConvidado"] = $login["idConvidado"];
        header('Location: http://localhost/casamento/view/confirmarPresenca.php');
    }
    else{
        $_SESSION["error"] = "Não foi possível excluír a presença do convidado $convidado";
        header('Location: http://localhost/casamento/view/login.php');
    }


