<?php 
    include_once("../../../model/database/_connection.php");
    include_once("../../../model/database/ConvidadoDAO.php");

    $convidados =  listarConvidados($connect);