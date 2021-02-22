<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casamento</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&family=Sacramento&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5e0d5b45e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./view/css/style.css">
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
                        <a class="nav-link" href="#noivos">Noivos</a>
                        <a class="nav-link" href="#mapa-local">Local do evento</a>
                        <a class="nav-link" href="#convidados-honra">Convidados de honra</a>
                        <a class="nav-link" href="http://localhost/casamento/view/confirmarPresenca.php">Confirmar presença</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <section id="contador" class="d-flex justify-content-around">
            <div class="text-center">
                <p id='count-dias-num' class='count-number'>21</p>
                <p class='count-text'>Dias</p>
            </div>
            <div class="text-center">
                <p id='count-horas-num' class='count-number'>21</p>
                <p class='count-text'>Horas</p>
            </div>
            <div class="text-center">
                <p id='count-min-num' class='count-number'>21</p>
                <p class='count-text'>Minutos</p>
            </div>
            <div class="text-center">
                <p id='count-seg-num' class='count-number'>21</p>
                <p class='count-text'>Segundos</p>
            </div>
            
        </section>
        
        <section id="noivos">
            <h1 class='title'>Noivos</h1>
            <div class="text-center">
                <img src="./res/img/img_noiva.png" class="img-fluid" alt="Responsive image">
                <img src="./res/img/img_noivo.jpg" class="img-fluid" alt="Responsive image">
            </div>
        
            <p class="text text-justify mt-2 mb-2">
                Histórias de amor existem, e, às vezes, nem nós mesmos acreditamos todo o tempo que já estamos juntos. Porém, o brilho intenso e apaixonado dos nossos olhares nos fazem lembrar o porquê de chegarmos até aqui sem sentir tanto o tempo passar....Vamos nos casar! Estamos preparando tudo com muito carinho para curtirmos cada momento com nossos amigos e familiares queridos!
            </p>
        </section>

        <section id="mapa-local">
            <h1 class='title'>Local do evento</h1>
            <div class="text-center">
                <img src="./res/img/img_local_1.jpg" class="img-fluid" alt="Responsive image">
                <img src="./res/img/img_local_2.jpg" class="img-fluid" alt="Responsive image">
                <img src="./res/img/img_local_3.jpeg" class="img-fluid" alt="Responsive image">    
            </div>

            <h3 class="title">Descrição</h3>
            <p class="text">
                Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
            </p>
            <p class="text text-justify mt-2 mb-2">ESPAÇO PANORAMA-Núcleo Rural Tamanduá - Paranoá, Brasília - DF, 70297-400</p>

            <div id="maps"></div> 
            

            <div class="d-flex justify-content-around">
                <a class="btn btn-confirm" href="http://localhost/casamento/view/confirmarPresenca.php">
                    Confirmar sua presença
                </a>
            </div>
        </section>
        
        <section id="convidados-honra">
            <h1 class='title'>Convidados de honra</h1>
            <div class="row mx-auto">
                <?php for($i = 0; $i < 13; $i++): ?>
                    <div class="col-xl-4 col-lg-4 col-xl-md-6 col-sm-6 mb-2">
                        <div class="card img-convidado">
                            <img src="./res/img/img_noiva.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text card-title">Nome do convidado</p>
                                <p class="card-text card-description">Categoria</p>
                            </div>
                        </div>
                    </div>
                <?php endfor;?>
            </div>
        </section>
               
    </main>

    <footer>
        <h3 class="text-center copy mb-0">Desenvolvido por Devidson</h3>
    </footer>
    
    <script>
        function myMap() {
        var mapProp= {
          center:new google.maps.LatLng(51.508742,-0.120850),
          zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("maps"), mapProp);
        }
    </script>
        
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeBWmKvHSwglCnI69ez2MIxAqzErnZbnk&callback=myMaps"></script>
</body>
</html>