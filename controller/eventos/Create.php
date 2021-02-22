<?php 
    include_once("../../model/database/_connection.php");
    include_once("../../model/Evento.php");
    include_once("../../model/database/EventoDAO.php");

    $titulo = $_POST["titulo"];
    $dataEvento = $_POST["dataEvento"];
    $localEvento = $_POST["localEvento"];
    $mapsLat = $_POST["mapsLat"];
    $mapsLng = $_POST["mapsLng"];
    $descricao = $_POST["descricao"];

    $evento = new Evento();
    $evento->titulo = $titulo;
    $evento->dataEvento = $dataEvento;
    $evento->localEvento = $localEvento;
    $evento->mapsLat = $mapsLat;
    $evento->mapsLng = $mapsLng;
    $evento->descricao = $descricao;

    $result = inserirEvento($connect, $evento);
    
    session_start();
    
    if($result)
        $_SESSION["success"] = "Usuário $titulo inserido com sucesso";
    else
        $_SESSION["error"] = "Não foi possível inserir o usuário $titulo";

    header('Location: http://localhost/casamento/view/dist/eventos/eventos.php');