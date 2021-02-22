<?php 
    include_once("../../model/database/_connection.php");
    include_once("../../model/Convidado.php");
    include_once("../../model/database/ConvidadoDAO.php");

    $nome = $_POST["nomeConvidado"];
    $email = $_POST["emailConvidado"];
    $senha = $_POST["senhaConvidado"];

    $convidado = new Convidado();
    $convidado->nomeConvidado = $nome;
    $convidado->emailConvidado = $email;
    $convidado->senhaConvidado = $senha;

    $result = inserirConvidado($connect, $convidado);
    
    session_start();
    
    if($result)
        $_SESSION["success"] = "Usuário $nome inserido com sucesso";
    else
        $_SESSION["error"] = "Não foi possível inserir o usuário $nome";

    header('Location: http://localhost/casamento/view/dist/convidados/convidados.php');