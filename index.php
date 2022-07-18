<button type="button" onclick="getLocation()">Aktifkan Lokasi</button>
<p id="demo"></p>
<script>
  var x = document.getElementById("demo");
  var validDistance = 3;

  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      x.innerHTML = "Geolocation tidak didukung oleh browser ini.";
    }
  }


  function distance(lat1, lon1, lat2, lon2, unit) {
    var radlat1 = Math.PI * lat1 / 180
    var radlat2 = Math.PI * lat2 / 180
    var radlon1 = Math.PI * lon1 / 180
    var radlon2 = Math.PI * lon2 / 180
    var theta = lon1 - lon2
    var radtheta = Math.PI * theta / 180
    var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
    dist = Math.acos(dist)
    dist = dist * 180 / Math.PI
    dist = dist * 60 * 1.1515
    if (unit == "K") {
      dist = dist * 1.609344
    }
    if (unit == "N") {
      dist = dist * 0.8684
    }
    if (unit == "M") {
      dist = dist * 1000
    }
    return dist
  }

  function showPosition(position) {
    // x.innerHTML = "Latitude: " + position.coords.latitude +
    //   "<br>Longitude: " + position.coords.longitude +
    //   "<br><b>Lokasi Telah Aktif</b>";
    // x.innerHTML = position.coords.latitude , position.coords.longitude;
    cel = distance((position.coords.latitude), (position.coords.longitude), -8.1262943, 114.3955829)

    if(cel <validDistance){
    x.innerHTML = "true"; 
    }
    else {
      x.innerHTML = "false"; 
    }
  }
</script>

<!-- 2 -->

<!-- <button type="button" onclick="getLocation()">Aktifkan Lokasi</button>
 <p id="demo"></p>
<script>
var x = document.getElementById("demo");
 
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation tidak didukung oleh browser ini.";
  }
}
 
function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude + 
  "<br><b>Lokasi Telah Aktif</b>"; 
}
</script>   -->