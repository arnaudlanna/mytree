
    <div class="col-sm-12">
        <div class="card card-signin my-1">
            <div class="card-body">
                <h4 style="color: gray" class="card-title text-center">Veja as arvores perto de voce</h4>
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