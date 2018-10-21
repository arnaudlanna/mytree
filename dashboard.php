<?php
include_once("config.php");

$pdo = new PDO("mysql:host=localhost;dbname=nasa", "root", "");
$stmt = $pdo->prepare("SELECT * FROM `tree` WHERE owner_id = ?");
$stmt->execute([$_SESSION["user"]->id]);
$tree = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>MyThree - Adote uma Árvore</title>
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
                <button type="button" id="sidebarCollapse" class="btn btn-success">
                <i class="fas fa-align-left"></i>
                <span>Minhas Árvores</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Árvores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="incluir.php">Incluir Árvore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="beneficios.php">Benefícios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="arvoresperto.php">Redondeza</a>
                    </li>
                    <li>
                    <a href="./api/Logout.php" id="sidebarCollapse" class="btn btn-danger">
                <span>Sair</span>
                <i class="fa fa-power-off"></i>
                </a>
                    </li>
                    </ul>


        </nav>
</div>
</div>
</div>
    </div>
      <div class="wrapper">
      <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>My Tree</h3>
            </div>

            <ul class="list-unstyled CTAs">
            <?php
            if($tree){
                foreach($tree as $row){
                echo "  <li>
                            <a href=\"./dashboard.php?tree=" . $row["id"] . "\" class=\"article\">" . $row["nickname"] . "</a>
                        </li>";
                }
            } else {
                echo "<li> <a class=\"article\">Que pena, você não tem uma árvore ainda.</a></li>";
            }
            ?>
            </ul>
        </nav>
      <!-- Page Content  -->
      <div class="overlay"></div>
      <br>
      <br>
      <br>
      <br>
      <div class="container">
        <?php
            if($tree){
                if(isset($_GET["tree"])){
                    $treeid = $_GET["tree"];
                    $stmt = $pdo->prepare("SELECT * FROM `tree` WHERE owner_id = ? AND id = ?");
                    $stmt->execute([$_SESSION["user"]->id, $treeid]);
                    $tree = $stmt->fetch();
                }
                else{
                    $firsttree = reset($tree);
                    $tree = $tree[0];
                }
                include_once("arvore.php");
            }
            else{
                include_once("sem_arvores.php");
            }
        ?>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDODNbbp_hTZszf-IRJRdby4dmwTgAqnLE&callback=initMap"
    async defer></script>

   </body>
</html