<?php 
    include_once("../../../model/database/_connection.php");
    include_once("../../../model/database/PresencaDAO.php");

    $presencas =  listarPresencas($connect);