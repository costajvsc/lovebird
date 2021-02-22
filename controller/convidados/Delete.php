<?php
    include_once("../../model/database/_connection.php");
    include_once("../../model/Convidado.php");
    include_once("../../model/database/ConvidadoDAO.php");

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $convidado = new Convidado();
    $convidado ->idConvidado = $id;

    $result = deletarConvidado($connect, $convidado);

    session_start();
    
    if($result)
        $_SESSION["warning"] = "Usuário $nome excluído com sucesso";
    else
        $_SESSION["error"] = "Não foi possível excluír o usuário $nome";

    header('Location: http://localhost/casamento/view/dist/convidados/convidados.php');

