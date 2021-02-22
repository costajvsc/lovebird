<?php 
    error_reporting(0);
    include_once("../../../controller/presencas/Read.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casamento - Presencas</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&family=Sacramento&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5e0d5b45e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
                        <a class="nav-link" href="http://localhost/casamento/#noivos">Eventos</a>
                        <a class="nav-link" href="http://localhost/casamento/#mapa-local">Convidados especiais</a>
                        <a class="nav-link" href="http://localhost/casamento/#convidados-honra">Convidados</a>
                        <a class="nav-link" href="#">Comentários</a>
                        <a class="nav-link" href="#">Presenças</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <?php
        
            session_start();
            if($_SESSION["success"]){
                $message = $_SESSION["success"];
                unset ($_SESSION["success"]);
                echo "<div class='alert alert-success' role='alert'> $message </div>";
            }
            else if($_SESSION["warning"]){
                $message = $_SESSION["warning"];
                unset ($_SESSION["warning"]);
                echo "<div class='alert alert-warning' role='alert'> $message </div>";
            }
            else if($_SESSION["error"]){
                $message = $_SESSION["error"];
                unset ($_SESSION["error"]);
                echo "<div class='alert alert-danger' role='alert'> $message </div>";
            }
        ?>
        <div class="d-flex justify-content-between mb-2">
        <h3>Presenças</h3>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">Convidado</th>
                <th scope="col">Evento</th>
                <th scope="col">Adultos</th>
                <th scope="col">Crianças</th>
                <th scope="col">Observações</th>
                <th scope="col">Opções</th>
                </tr>
            </thead>    
            <tbody>
                <?php foreach($presencas as $c) : ?>
                    <tr>
                        <td><?= $c['CONVIDADO'] ?></td>
                        <td><?= $c['EVENTO'] ?></td>
                        <td><?= $c['qntAdultos'] ?></td>
                        <td><?= $c['qntCriancas'] ?></td>
                        <td><?= $c['observacao'] ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                
                                <form action="http://localhost/casamento/view/dist/presencas/presencasDelete.php" method="post">
                                    <input type="hidden" name="id" value="<?= $c["idPresenca"] ?>">
                                    <input type="hidden" name="convidado" value="<?= $c["CONVIDADO"] ?>">
                                    <button class="btn btn-outline-danger" type="submit">
                                        <i class="fas fa-trash"></i>
                                        Excluir conviado
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <footer>
        <h3 class="text-center copy mb-0">Desenvolvido por Devidson</h3>
    </footer>
</body>
</html>