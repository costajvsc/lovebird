<?php 
    include_once("../../model/database/_connection.php");
    include_once("../../model/Presenca.php");
    include_once("../../model/database/PresencaDAO.php");

    $idConvidado = $_POST["idConvidado"];
    $idEvento = $_POST["idEvento"];
    $qntAdultos = $_POST["qndAdultos"];
    $qntCriancas = $_POST["qndCriancas"];
    $observacao = $_POST["observacao"];

    $presenca = new Presenca();
    $presenca->idEvento = $idEvento;
    $presenca->idConvidado = $idConvidado;
    $presenca->qntAdultos = $qntAdultos;
    $presenca->qntCriancas = $qntCriancas;
    $presenca->observacao = $observacao;

    $result = inserirPresenca($connect, $presenca);
    session_start();
    
    if($result)
        $_SESSION["success"] = "Presença confirmada com sucesso";
    else
        $_SESSION["error"] = "Não foi possível confirmar a presença";

    header('Location: http://localhost/casamento/view/confirmarPresenca.php');