<?php

    include_once("../../model/database/_connection.php");
    include_once("../../model/Convidado.php");
    include_once("../../model/database/ConvidadoDAO.php");

    $id = $_POST["id"];
    $nome = $_POST["nomeConvidado"];
    $email = $_POST["emailConvidado"];
    $senha = $_POST["senhaConvidado"];

    $convidado = new Convidado();
    
    $convidado->idConvidado = $id;
    $convidado->nomeConvidado = $nome;
    $convidado->emailConvidado = $email;
    $convidado->senhaConvidado = $senha;

    alterarConvidado($connect, $convidado);
    $result = alterarConvidado($connect, $convidado);
    echo $result;

    session_start();
    
    if($result)
        $_SESSION["warning"] = "Usuário $nome atualizado com sucesso";
    else
        $_SESSION["error"] = "Não foi possível atualizar o usuário $nome";

    header('Location: http://localhost/casamento/view/dist/convidados/convidados.php');



