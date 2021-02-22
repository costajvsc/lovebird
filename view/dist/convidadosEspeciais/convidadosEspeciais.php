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
        <div class="d-flex justify-content-between mb-2">
        <h3>Convidados especiais</h3>
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#form-add-convidado-especial"> 
            <i class="fas fa-plus"></i>
            Adicionar
        </button>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Convidado especial</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>    
            <tbody>
                <?php for($i = 0; $i < 13; $i++): ?>
                    <tr>
                        <td>Fulano da Silva</td>
                        <td>Padrinho</td>
                        <td>Cerimônia de casamento</td> 
                        <td>
                            <a class="btn btn-outline-info" href="convidadosEspeciaisEdit.php">
                                <i class="fas fa-edit"></i>
                                Editar info
                            </a>
                            <a class="btn btn-outline-danger" href="convidadosEspeciaisDelete.php">
                                <i class="fas fa-trash"></i>
                                Excluir convidado
                            </a>
                        </td>
                    </tr>
                <?php endfor;?>
            </tbody>
        </table>
    </main>

    <div class="modal fade" id="form-add-convidado-especial" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar convidado especial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nome-convidado-especial" name="titulo" maxlength="45" minlength="3" placeholder="Fulano da Silva" required>
                        </div>
                        <div class="form-group">
                            <select class="custom-select mr-sm-2" id="evento" name="idEvento" required>
                                <option selected>Evento</option>
                                <option value="1">Cerimônia de casamento</option>
                                <option value="2">Churrasco da família</option>
                                <option value="3">Chá de panela</option>
                                <option value="4">Despedida de solteiro</option>
                                <option value="5">Despedida de solteira</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="custom-select mr-sm-2" id="tipo-convidado" name="tipo" required>
                                <option selected>Tipo de conviado</option>
                                <option value="Padrinho">Padrinho</option>
                                <option value="Madrinha">Madrinha</option>
                                <option value="Daminha">Daminha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="foto-convidado-especial" name="foto_convidado_especial">
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