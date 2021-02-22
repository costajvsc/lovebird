<?php

    function inserirComentario($connect, $comentario){
        $query = "INSERT INTO Comentarios (comentario, idEvento, idConvidado)
                    VALUES('{$comentario->comentario}', '{$comentario->idEvento}', '{$comentario->idConvidado}')";
        
        return mysqli_query($connect, $query);
    }
    
    function listarComentarios($connect){
        $comentarios = array();
        
        $query = "SELECT * FROM Comentarios";

        $result = mysqli_query($connect, $query);

        while ($c = mysqli_fetch_assoc($result)) 
        {
            array_push($comentarios, $c);
        }

        return $comentarios;
    }

    function pesquisarComentario($connect, $id) {
        $query = "SELECT Convidados.nomeConvidado AS 'CONVIDADO', Eventos.titulo AS 'EVENTO', Comentarios.comentario as 'COMENTARIO' FROM Comentarios JOIN Eventos ON Comentarios.idEvento = Eventos.idEvento JOIN Convidados ON Comentarios.idConvidado = Convidados.idConvidado WHERE Comentarios.idEvento = '{$id}';";
        $result = mysqli_query($connect, $query);

        $comentarios = array();

        while ($c = mysqli_fetch_assoc($result)) 
        {
            array_push($comentarios, $c);
        }
        
        return $comentarios;
    }

    function alterarComentario($connect, $comentario){
        $query = "UPDATE Comentario SET comentario = '{$comentario->comentario}', idEvento = '{$comentario->idEvento}', idConvidado = '{$comentario->idConvidado}' WHERE idComentario = $comentario->idComentario;";
        $result = mysqli_query($connect, $query);
        return $result;
    }

    function deletarComentario($connect, $comentario){
        $query = "DELETE from Comentarios WHERE idComentario = $comentario->idComentario;";
        $result = mysqli_query($connect, $query);
        return $result;
    }
?>