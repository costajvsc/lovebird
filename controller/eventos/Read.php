<?php 
    include_once("../../../model/database/_connection.php");
    include_once("../../../model/database/EventoDAO.php");

    $eventos =  listarEventos($connect);