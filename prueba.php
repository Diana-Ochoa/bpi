<!DOCTYPE html>
<html lang="es">
<head>
<title>Añadir Marcadores</title>
<meta charset="utf-8" />
</head>
<body>

<style>
#map{height: 100vh;}
</style>

<div id="map"></div>

<link rel='stylesheet' href='https://unpkg.com/leaflet@1.4.0/dist/leaflet.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js'></script>
<script id="rendered-js">
var markers = [
  ["León", 42.5989995, -5.5682413],
  ["Zamora", 41.6857693, -5.9423150],
  ["Salamanca", 40.7665581, -6.0217649]
];
var zoom = 6;

var map = L.map('map').setView([41.6857693, -5.9423150], zoom);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

for (var i = 0; i < markers.length; i++) {
  marker = new L.marker([markers[i][1],markers[i][2]])
    .bindPopup(markers[i][0])
    .addTo(map);
}
</script>

</body>
</html>