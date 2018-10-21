
<div class="row">
    <div class="col-sm-4">
        <div class="card card-signin my-1">
            <div class="card-body">
                <i id="arrowback" class="fa fa-arrow-left" style="color:gray; position:absolute; font-size:36px; display: none;"></i>
                <h4 style="color: gray" class="card-title text-center">Sua Árvore</h4>
                <img class="responsive" src="https://www.concordnh.gov/calendar/nature%20icon.png" alt="">
                <br>
                <br>
                <h4 style="color: gray" class="card-subtitle">Nome: <?php echo $tree["nickname"] ?></h4>
                <h4 style="color: gray" class="card-subtitle">Especie: <?php echo $tree["specie"] ?></h4>
                <h4 style="color: gray" class="card-subtitle">Idade: <?php echo $tree["age"] ?> dias</h4>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="card card-signin my-1">
            <div class="card-body">
                <h4 style="color: gray" class="card-title text-center">Localização da sua Árvore</h4>
                <div class="row">
                <div class="col-12">
                    <div id="map"></div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: <?php echo $tree["lat"] ?>, lng: <?php echo $tree["lng"] ?>},
        mapTypeId: 'satellite',
        zoom: 17
    });
    var marker = new google.maps.Marker({
    position: {lat: <?php echo $tree["lat"] ?>, lng: <?php echo $tree["lng"] ?>},
    map: map,
    title: '<?php echo $tree["nickname"] ?>',
    icon: "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|42f442"
    });
  }
</script>   