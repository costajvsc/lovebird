<?php
    session_start();
    $idConvidado = $_SESSION["idConvidado"];
    include_once("../model/database/_connection.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casamento - Confirmar presença</title>

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
        <h1 class="title">Confirmar presença</h1>
        <form action="http://localhost/casamento/controller/presencas/Create.php" method="post">
            <input type="hidden" name="idConvidado" value="<?= $idConvidado ?>">
            
            <div class="form-group">
                <label for="evento">Evento</label>
                <select class="custom-select mr-sm-2" id="evento" name="idEvento" required>
                    <option selected>Selecionar</option>
                    <?php 
                        include_once("../model/database/EventoDAO.php");
                        $eventos = listarEventos($connect);

                        foreach($eventos as $e):
                    ?>
                        <option value="<?= $e["idEvento"] ?>"><?= $e["titulo"] ?></option>

                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="qnt-adultos">Quantidade de adultos</label>
                <select class="custom-select mr-sm-2" id="qnt-adultos" name="qndAdultos" required>
                    <option selected>Selecionar</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div class="form-group">
                <label for="qnt-criancas">Quantidade de crianças</label>
                <select class="custom-select mr-sm-2" id="qnt-criancas" name="qndCriancas" required>
                    <option selected>Selecionar</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea name="observacao" id="observacao" name="observacao" class="form-control" cols="30" rows="4" maxlength="255" ></textarea>
            </div>

            <div class="d-flex justify-content-around">
                <button type="submit" class="btn btn-confirm mb-2">Confirmar presença</button>
            </div>

        </form>

        <section id="eventos-confimados">
            <h1 class="title">Eventos confirmados</h1>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Evento</th>
                        <th scope="col">Data</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                        include_once("../model/database/PresencaDAO.php");
                    
                        $eventos =  pesquisarPresenca($connect, $idConvidado);
                        foreach($eventos as $e):
                    ?>
                    <tr>
                        <td><?= $e['EVENTO']?></td>
                        <td><?= $e['dataEvento']?></td>
                        <td>
                            <div class="d-fex justify-content-between">
                                <form action="comentarios.php" method="post">
                                    <input type="hidden" name="titulo" value="<?= $e["EVENTO"] ?>">
                                    <input type="hidden" name="idEvento" value="<?= $e["idEvento"] ?>">
                                
                                    <button class="btn btn-outline-primary">
                                        <i class="fas fa-comments"></i>
                                        Comentários
                                    </button>
                                </form>

                                <form action="http://localhost/casamento/controller/presencas/Delete.php" method="post">
                                    <input type="hidden" name="idPresenca" value="<?= $e["idPresenca"] ?>"  >
                                    <input type="hidden" name="convidado" value="<?= $e["CONVIDADO"] ?>"  >
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="fas fa-door-open"></i>
                                        Cancelar presença
                                    </button>
                                </form>
                            </div>
                            
                        </td>
                    </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <h3 class="text-center copy mb-0">Desenvolvido por Devidson</h3>
    </footer>
</body>
</html>