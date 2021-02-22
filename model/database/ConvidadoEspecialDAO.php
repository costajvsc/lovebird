<?php

    function inserirConvidadoEspecial($connect, $convidadoEspecial){
        $query = "INSERT INTO ConvidadosEspeciais (nomeConvidadoEspecial, tipo, urlPhoto, idEvento)
                    VALUES('{$convidadoEspecial->nomeConvidadoEspecial}', '{$convidadoEspecial->tipo}', '{$convidadoEspecial->urlPhoto}', '{$convidadoEspecial->idEvento}')";
        
        return mysqli_query($connect, $query);
    }
    
    function listarConvidadosEspeciais($connect){
        $convidadoEspcial = array();
        
        $query = "SELECT * FROM ConvidadosEspeciais";

        $result = mysqli_query($connect, $query);

        while ($c = mysqli_fetch_assoc($result)) 
        {
            array_push($ConvidadoEspecials, $c);
        }

        return $convidadoEspecial;
    }

    function pesquisarConvidadoEspecial($connect, $convidadoEspecial) {
        $query = "SELECT * FROM ConvidadosEspeciais WHERE idConvidadosEspeciais = $convidadoEspecial->idConvidadoEspecial;";
        $result = mysqli_query($connect, $query);
        $convidadoEspecial = mysqli_fetch_assoc($result);
        return $convidadoEspecial;
    }

    function alterarConvidadoEspecial($connect, $convidadoEspecial){
        $query = "UPDATE ConvidadosEspeciais SET nomeConvidadoEspecial = '{$convidadoEspecial->nomeConvidadoEspecial}', tipo = '{$convidadoEspecial->tipo}', urlPhoto = '{$convidadoEspcial->urlPhoto}' WHERE idConvidadosEspeciais  = $convidadoEspecial->idConvidadoEspecial;";
        $result = mysqli_query($connect, $query);
        return $result;
    }

    function deletarConvidadoEspecial($connect, $ConvidadoEspecial){
        $query = "DELETE from ConvidadosEspeciais WHERE idConvidadosEspeciais = $convidadoEspecial->idConvidadoEspecial;";
        $result = mysqli_query($connect, $query);
        return $result;
    }
?>