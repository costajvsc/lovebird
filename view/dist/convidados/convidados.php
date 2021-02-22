<?php 
    error_reporting(0);
    include_once("../../../controller/convidados/Read.php");
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
        <h3>Convidados</h3>
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#form-add-convidado"> 
            <i class="fas fa-plus"></i>
            Adicionar
        </button>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Opções</th>
                </tr>
            </thead>    
            <tbody>
                    <?php
                        
                        foreach($convidados as $c) :
                    ?>
                    <tr>
                        <td><?= $c['nomeConvidado'] ?></td>
                        <td><?= $c['emailConvidado'] ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                            <form action="http://localhost/casamento/view/dist/convidados/convidadosEdit.php" method="post">
                                    <input type="hidden" name="id" value="<?= $c["idConvidado"] ?>">
                                    <input type="hidden" name="nome" value="<?= $c["nomeConvidado"] ?>">
                                    <input type="hidden" name="email" value="<?= $c["emailConvidado"] ?>">
                                    <input type="hidden" name="senha" value="<?= $c["senhaConvidado"] ?>">
                                    <button class="btn btn-outline-info mr-2" type="submit">
                                        <i class="fas fa-edit"></i>
                                        Editar info
                                    </button>
                                </form>
                                
                                <form action="http://localhost/casamento/view/dist/convidados/convidadosDelete.php" method="post">
                                    <input type="hidden" name="id" value="<?= $c["idConvidado"] ?>">
                                    <input type="hidden" name="nome" value="<?= $c["nomeConvidado"] ?>">
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

        <div class="modal fade" id="form-add-convidado" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adicionar convidado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="http://localhost/casamento/controller/convidados/Create.php">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nome-convidado" name="nomeConvidado" maxlength="45" minlength="3" placeholder="Fulano da silva" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email-convidado" name="emailConvidado" placeholder="fulano.silva@gmail.com"required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="senha-convidado" name="senhaConvidado" maxlength="8" minlength="3" placeholder="Senha de acesso" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="senha-confirm-convidado"  maxlength="8" minlength="3" placeholder="Confirmar a senha" required>
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