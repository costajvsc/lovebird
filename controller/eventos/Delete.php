<?php
    include_once("../../model/database/_connection.php");
    include_once("../../model/Evento.php");
    include_once("../../model/database/EventoDAO.php");

    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $evento = new evento();
    $evento ->idEvento = $id;

    $result = deletarEvento($connect, $evento);

    session_start();
    
    if($result)
        $_SESSION["warning"] = "Evento $titulo excluído com sucesso";
    else
        $_SESSION["error"] = "Não foi possível excluír o evento $titulo";

    header('Location: http://localhost/casamento/view/dist/eventos/eventos.php');

