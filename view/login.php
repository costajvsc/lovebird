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
    

    <main class="container">
        <form action="http://localhost/casamento/controller/login/login.php" method="POST" id="form-login">
            <div class="row text-white">
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 title">Login</h1>
                    <div class="px-2">
                        <form action="" class="justify-content-center">
                            <div class="form-group">
                                <label class="sr-only" for="email-convidado">Email</label>
                                <input type="email" class="form-control" id="email-convidado" name="email" placeholder="exemple@example.com">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="senha-convidado">senha</label>
                                <input type="password" class="form-control" id="senha-convidado" name="password" placeholder="********" >
                            </div>

                            <?php
                                error_reporting(0);
                                session_start();
                                if($_SESSION["error"]){
                                    $message = $_SESSION["error"];
                                    unset ($_SESSION["error"]);
                                    echo "<p class='text-danger text-center'>Não foi possível realizar o login</p>";
                                }
                            ?>
                            <button type="submit" class="btn btn-confirm btn-lg">Logar</button>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>
</html>