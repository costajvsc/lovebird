<?php

    function inserirEvento($connect, $evento){
        $query = "INSERT INTO Eventos(titulo, dataEvento, localEvento, mapsLat, mapsLng, descricao)
                    VALUES('{$evento->titulo}', '{$evento->dataEvento}', '{$evento->localEvento}', '{$evento->mapsLat}', '{$evento->mapsLng}', '{$evento->descricao}');";
        
        $result =  mysqli_query($connect, $query);
        return $result;
    }
    
    function listarEventos($connect){
        $eventos = array();
        
        $query = "SELECT * FROM Eventos";

        $result = mysqli_query($connect, $query);

        while ($e = mysqli_fetch_assoc($result)) 
        {
            array_push($eventos, $e);
        }

        return $eventos;
    }

    function pesquisarEvento($connect, $evento) {
        $query = "SELECT * FROM Eventos WHERE idEvento = $evento->idEvento;";
        $result = mysqli_query($connect, $query);
        $Evento = mysqli_fetch_assoc($result);
        return $evento;
    }

    function alterarEvento($connect, $evento){
        $query = "UPDATE Eventos SET titulo = '{$evento->titulo}', dataEvento = '{$evento->dataEvento}', localEvento = '{$evento->localEvento}', mapsLat = '{$evento->mapsLng}', mapsLat = '{$evento->mapsLng}', descricao = '{$evento->descricao}' WHERE idEvento = $evento->idEvento;";
        $result = mysqli_query($connect, $query);
        return $result;
    }

    function deletarEvento($connect, $evento){
        $query = "DELETE from Eventos WHERE idEvento = $evento->idEvento;";
        $result = mysqli_query($connect, $query);
        return $result;
    }
?>