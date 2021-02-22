<?php

    include_once("../../model/database/_connection.php");
    include_once("../../model/Evento.php");
    include_once("../../model/database/EventoDAO.php");

    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $dataEvento = $_POST["dataEvento"];
    $localEvento = $_POST["localEvento"];
    $mapsLat = $_POST["mapsLat"];
    $mapsLng = $_POST["mapsLng"];
    $descricao = $_POST["descricao"];

    $evento = new Evento();
    $evento->idEvento = $id;
    $evento->titulo = $titulo;
    $evento->dataEvento = $dataEvento;
    $evento->localEvento = $localEvento;
    $evento->mapsLat = $mapsLat;
    $evento->mapsLng = $mapsLng;
    $evento->descricao = $descricao;

    $result = alterarEvento($connect, $evento);

    session_start();
    
    if($result)
        $_SESSION["warning"] = "Usuário $nome atualizado com sucesso";
    else
        $_SESSION["error"] = "Não foi possível atualizar o usuário $nome";

    header('Location: http://localhost/casamento/view/dist/eventos/eventos.php');



