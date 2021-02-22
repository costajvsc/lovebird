<?php

    function inserirConvidado($connect, $convidado){
        $query = "INSERT INTO Convidados(nomeConvidado, emailConvidado, senhaConvidado)
                    VALUES('{$convidado->nomeConvidado}', '{$convidado->emailConvidado}', '{$convidado->senhaConvidado}')";
        
        return mysqli_query($connect, $query);
    }
    
    function listarConvidados($connect){
        $convidados = array();
        
        $query = "SELECT * FROM Convidados";

        $result = mysqli_query($connect, $query);

        while ($c = mysqli_fetch_assoc($result)) 
        {
            array_push($convidados, $c);
        }

        return $convidados;
    }

    function pesquisarConvidado($connect, $convidado) {
        $query = "SELECT * FROM Convidados WHERE idConvidado = $convidado->idConvidado;";
        $result = mysqli_query($connect, $query);
        $convidado = mysqli_fetch_assoc($result);
        return $convidado;
    }

    function alterarConvidado($connect, $convidado){
        $query = "UPDATE Convidados SET nomeConvidado = '{$convidado->nomeConvidado}', emailConvidado = '{$convidado->emailConvidado}', senhaConvidado = '{$convidado->senhaConvidado}' WHERE idConvidado = $convidado->idConvidado;";
        $result = mysqli_query($connect, $query);
        return $result;
    }

    function deletarConvidado($connect, $convidado){
        $query = "DELETE from Convidados WHERE idConvidado = $convidado->idConvidado;";
        $result = mysqli_query($connect, $query);
        return $result;
    }
?>