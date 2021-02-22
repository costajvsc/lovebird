<?php 
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $local = $_POST['local'];
    $mapsLat = $_POST['mapsLat'];
    $mapsLgn = $_POST['mapsLgn'];
    $descricao = $_POST['descricao'];
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
                        <a class="nav-link" href="http://localhost/casamento/view/dist/eventos/eventos.php">Eventos</a>
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
        
        <h3>Atualizar eventos</h3>
        <form action="http://localhost/casamento/controller/eventos/Edit.php" method="POST">
            <input type="hidden" name="id" value="<?= $id?>">
            <div class="form-group">
                <input type="text" class="form-control" id="titulo-evento" name="titulo" maxlength="45" minlength="3" value="<?= $titulo?>" required>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" id="data-evento" name="dataEvento" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="local-evento" name="localEvento" maxlength="100" minlength="3" value="<?= $local?>" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="latitude-evento" name="mapsLat" value="<?= $mapsLat?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="longitude-evento" name="mapsLng" value="<?= $mapsLgn?>" >
            </div>
            <div class="form-group">
                <textarea class="form-control" id="descricao-evento" name="descricao" cols="30" rows="4" maxlength="255" required><?= $descricao?></textarea>
            </div>
        
            
            <div class="d-flex justify-content-end">
                <a type="button" class="btn btn-dark mr-2" href="eventos.php">
                    <i class="far fa-window-close"></i>
                    Cancelar
                </a>
                <button type="submit" class="btn btn-success"> 
                    <i class="fas fa-save"></i>
                    Salvar
                </button>
            </div>
        </form>
    </main>

    <footer>
        <h3 class="text-center copy mb-0">Desenvolvido por Devidson</h3>
    </footer>
</body>
</html>