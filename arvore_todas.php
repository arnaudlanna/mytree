<?php
$pdo = new PDO("mysql:host=localhost;dbname=nasa", "root", "");
$stmt = $pdo->prepare("SELECT * FROM `tree` WHERE owner_id = ?");
$stmt->execute([$_SESSION["user"]->id]);
$trees = $stmt->fetchAll();
?>
    <div class="col-sm-12">
        <div class="card card-signin my-1">
            <div class="card-body">
                <h4 style="color: gray" class="card-title text-center">Veja as árvores ao seu redor:</h4>
                <div class="row">
                <div class="col-12">
                    <center><p style="color: gray;" id="geostatus">Determinando Localização!</p></center>           
                    <div id="map"></div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
  var map;
  function initLocate () {
    navigator.permissions.query({'name': 'geolocation'})
    .then( permission => checkPermission(permission.state) )
    if (navigator.geolocation) {
            console.log("oi");
            navigator.geolocation.getCurrentPosition(initMap);   
        } else {
            $("#geostatus").html("Geolocalização não suportada.");
        }
    }
    function checkPermission (permission){
        if(permission == "denied"){
            $("#geostatus").html("Permita o acesso a geolocalização e atualize a página!");
    }
    else{
        $("#geostatus").html("");
    }
  }
  function initMap(position) {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: position.coords.latitude, lng: position.coords.longitude},
        mapTypeId: 'satellite',
        zoom: 15
    });
    var marker = new google.maps.Marker({
        position: {lat: position.coords.latitude, lng: position.coords.longitude},
        map: map,
        title: 'Sua Localização',
        icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|ff0000'
    });
    <?php
        foreach ($trees as $tree){
            echo "var marker = new google.maps.Marker({
            position: {lat: ".$tree["lat"]. ", lng: " . $tree["lng"] . "},
            map: map,
            title: 'Sua Localização',
            icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|42f442'
            });";
        }
    ?>
  }
</script>   