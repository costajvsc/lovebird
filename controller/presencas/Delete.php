<?php
    include_once("../../model/database/_connection.php");
    include_once("../../model/Presenca.php");
    include_once("../../model/database/PresencaDAO.php");

    $id = $_POST["idPresenca"];
    $convidado = $_POST["convidado"];

    $presenca = new Presenca();
    $presenca ->idPresenca = $id;

    $result = deletarPresenca($connect, $presenca);

    session_start();
    
    if($result)
        $_SESSION["warning"] = "Presença do conviadodo $convidado excluído com sucesso";
    else
        $_SESSION["error"] = "Não foi possível excluír a presença do convidado $convidado";

    header('Location: http://localhost/casamento/view/dist/presencas/presencas.php');

