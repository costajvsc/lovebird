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
                    <a class="navbar-brand" href="#">Menu</a>    
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="http://localhost/casamento/view/dist/eventos/eventos.php">Eventos</a>
                        <a class="nav-link" href="http://localhost/casamento/view/dist/convidadosEspeciais/convidadosEspeciais.php">Convidados especiais</a>
                        <a class="nav-link" href="http://localhost/casamento/view/dist/convidados/convidados.php">Convidados</a>
                        <a class="nav-link" href="http://localhost/casamento/view/dist/comentarios/comentarios.php">Comentários</a>
                        <a class="nav-link" href="http://localhost/casamento/view/dist/presencas/presencas.php">Presenças</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="d-flex justify-content-between mb-2">
        <h3>Comentários</h3>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">Nome convidado</th>
                <th scope="col">Comentário</th>
                <th scope="col">Evento</th>
                <th scope="col">Opções</th>
                </tr>
            </thead>    
            <tbody>
                <?php for($i = 0; $i < 13; $i++): ?>
                    <tr>
                        <td>Fulano da Silva</td>
                        <td>Ansiosa pelo grande dia!</td>
                        <td>Cerimônia de casamento</td>
                        <td>
                            <a class="btn btn-outline-danger" href="comentariosDelete.php">
                                <i class="fas fa-trash"></i>
                                Excluir comentario
                            </a>
                        </td>
                    </tr>
                <?php endfor;?>
            </tbody>
        </table>
    </main>

      

    <footer>
        <h3 class="text-center copy mb-0">Desenvolvido por Devidson</h3>
    </footer>
</body>
</html>