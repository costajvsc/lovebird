<?php
    
    $idEvento = $_POST["idEvento"];
    $evento = $_POST["titulo"];

    include_once("../model/database/_connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casamento - Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&family=Sacramento&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5e0d5b45e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">
  
</head>
<body>
    <header>
        <div class="container d-flex justify-content-around">
            <nav class="navbar navbar-expand-lg">  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <a class="navbar-brand" href="http://localhost/casamento/">Menu</a>    
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="http://localhost/casamento/#noivos">Noivos</a>
                        <a class="nav-link" href="http://localhost/casamento/#mapa-local">Local do evento</a>
                        <a class="nav-link" href="http://localhost/casamento/#convidados-honra">Convidados de honra</a>
                        <a class="nav-link" href="#">Confirmar presença</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <h1 class="title"><?= $evento ?></h1>
        <!-- <section id="mapa-local">
            <h1 class='title'>Local do evento</h1>
            <p class="text text-justify mt-2 mb-2">ESPAÇO PANORAMA-Núcleo Rural Tamanduá - Paranoá, Brasília - DF, 70297-400</p>

            <div id="maps"></div> 

            <h3 class="title">Descrição</h3>
            <p class="text">
                Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
            </p>
        </section> -->

        <h1 class="title">Comentários</h1>
        <h2 class="text">Nome do evento</h2>
        
        <?php 
            include_once('../model/database/ComentarioDAO.php');
            $comentarios = pesquisarComentario($connect, $idEvento);

            foreach($comentarios as $c): 
        ?>
        <div class="comentario my-2">
            <blockquote>  
                <p class="text-justify">  
                    <?= $c["COMENTARIO"]?>
                </p>  
            </blockquote>  
            <div class="d-flex justify-content-between">
                <cite><?= $c["CONVIDADO"] ?></cite>  
                <a href="#" class="text-danger text-1em">Remover comentário</a>
            </div>
        </div>
        <?php endforeach;?>

        <div class="d-flex justify-content-end">
            <a class="btn btn-confirm my-2" data-toggle="modal" data-target="#form-add-comentario">
                Adicionar comentário
            </a>
        </div>
        
    </main>

    <div class="modal fade " id="form-add-comentario" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar comentário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="observacao">Comentário</label>
                            <textarea name="observacao" id="observacao" name="obvservacao" class="form-control" cols="30" rows="4" maxlength="255" ></textarea>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-danger mr-2" data-dismiss="modal">
                                    <i class="far fa-window-close"></i>
                                    Cancelar
                                </button>
                                <button type="submit" class="btn btn-success"> 
                                    <i class="fas fa-save"></i>
                                    Salvar
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <h3 class="text-center copy mb-0">Desenvolvido por Devidson</h3>
    </footer>
</body>
</html>