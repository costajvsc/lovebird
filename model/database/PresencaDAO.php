<?php

    function inserirPresenca($connect, $presenca){
        $query = "INSERT INTO Presencas(idEvento, idConvidado, qntAdultos, qntCriancas, observacao)
                    VALUES('{$presenca->idEvento}', '{$presenca->idConvidado}', '{$presenca->qntAdultos}', '{$presenca->qntCriancas}', '{$presenca->observacao}');";
        
        return mysqli_query($connect, $query);
    }
    
    function listarPresencas($connect){
        $presencas = array();
        
        $query = "SELECT Eventos.titulo AS 'EVENTO', Convidados.nomeConvidado AS 'CONVIDADO', Presencas.* FROM Presencas JOIN Eventos ON Eventos.idEvento = Presencas.idEvento JOIN Convidados ON Convidados.idConvidado = Presencas.idConvidado;";

        $result = mysqli_query($connect, $query);

        while ($p = mysqli_fetch_assoc($result)) 
        {
            array_push($presencas, $p);
        }

        return $presencas;
    }

    function pesquisarPresenca($connect, $id) {
        $presencas = array();
        
        $query = "SELECT Eventos.titulo AS 'EVENTO',  Eventos.dataEvento, Convidados.nomeConvidado AS 'CONVIDADO', Presencas.* FROM Presencas JOIN Eventos ON Eventos.idEvento = Presencas.idEvento JOIN Convidados ON Convidados.idConvidado = Presencas.idConvidado WHERE Presencas.idConvidado = '{$id}';";

        $result = mysqli_query($connect, $query);

        while ($p = mysqli_fetch_assoc($result)) 
        {
            array_push($presencas, $p);
        }
        return $presencas;
    }

    function alterarPresenca($connect, $Presenca){
        $query = "UPDATE Presencas SET idEvento = '{$presenca->idEvento}', idConvidado = '{$presenca->idConvidado}', qntAdultos = '{$presenca->qntAdultos}', qntCriancas = '{$presenca->qntCriancas}' WHERE idPresenca = $presenca->idPresenca;";
        $result = mysqli_query($connect, $query);
        return $result;
    }

    function deletarPresenca($connect, $presenca){
        $query = "DELETE from Presencas WHERE idPresenca = $presenca->idPresenca;";
        $result = mysqli_query($connect, $query);
        return $result;
    }
?>