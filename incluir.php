<?php
include_once("config.php");


?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>MyThree - Adote uma Arvore</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="css/style3.css">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
      <!-- Font Awesome JS -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
    #map {
    height: 370px;
    
    }
    </style>
    </head>
   <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
   <body>
   <div class="container">
         <div class="row">
         <div class="col-sm-12">
    <div id="content">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Árvores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Incluir Árvore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="beneficios.php">Benefícios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="arvoresperto.php">Redondeza</a>
                    </li>
                    <li class="nav-item">
                    <a href="./api/Logout.php" id="sidebarCollapse" class="btn btn-danger">
                    <span>Sair</span>
                    <i class="fa fa-power-off"></i>
                    </a>
                    </li>
            </div>
        </nav>
</div>
</div>
</div>
    </div>
      <div class="wrapper">
      <!-- Page Content  -->
      <div class="overlay"></div>
      <br>
      <br>
      <br>
      <br>
      <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-signin my-1">
                    <div class="card-body">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                     Aprenda a plantar
                    </button>
                        <form id="form-signin" action="actual_incluir.php" method="post" class="form-signin">
                            <div class="form-label-group">
                            <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Latitude" required hidden>
                            <label for="latitude">Latitude</label>
                            </div>
                            <div class="form-label-group">
                            <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Longitude" required hidden>
                            <label for="longitude">Longitude</label>
                            </div>
                            <div class="form-label-group">
                            <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Nome da Árvore" required>
                            <label for="nickname">Nome da Árvore</label>
                            </div>
                            <div class="form-label-group">
                            <input type="text" name="specie" id="specie" class="form-control" placeholder="Espécie da Árvore" required>
                            <label for="specie">Espécie da Árvore</label>
                            </div>
                            <center><p style="color: gray;" id="geostatus">Determinando Localização!</p></center>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Adicionar Árvore!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- jQuery CDN - Slim version (=without AJAX) -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <!-- Popper.JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <!-- Bootstrap JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      <!-- jQuery Custom Scroller CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function () {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function () {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
        <script>
            function getLocation() {
                navigator.permissions.query({'name': 'geolocation'})
                .then( permission => checkPermission(permission.state) )
                if (navigator.geolocation) {
                    console.log("oi");
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    $("#geostatus").html("Geolocalização não suportada.");
                }
            }
            function showPosition(position) {
                $("#latitude").val(position.coords.latitude);
                $("#longitude").val(position.coords.longitude);
                $("#geostatus").html("Geolocalização definida com sucesso!");
            }
            function checkPermission (permission){
                if(permission == "denied"){
                    $("#geostatus").html("Permita o acesso a geolocalização e atualize a página!");
                }
            }
            getLocation();
        </script>
   </body>
   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Passo a Passo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      1 - Escolha um local onde a sua árvore possa crescer livre, sem prejudicar postes calçadas e Construções
      <hr>
      2 - Abra uma cova de aproximadamente 40 cm de largura comprimento e profundidade
      <hr>
      3 - Coloque sua muda na cova sem o Vaso ou saquinho Cuidado para não prejudicar a raiz
      <hr>
      4 - Preencha a cova com terra que foi removida, se preferir misture adubo ou esterco
      <hr>
      5 - Use as mãos ou pés para compactar a terra da superfície
      <hr>
      6 - Regue sua muda pelo menos três vezes por semana ou no final do dia
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Entendido!</button>
      </div>
    </div>
  </div>
</div>
</html