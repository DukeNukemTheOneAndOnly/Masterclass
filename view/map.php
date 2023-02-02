<main class="m-3 bg-light center-text" style="height:700px; overflow:auto;">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

<style>
    #mapoti { height: 100%; }
</style>
<div id="mapoti"></div>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script>
var map = L.map('mapoti');
map.setView([46.2043907, 6.1431577], 14.5);
var northEast = L.latLng(46.1294, 5.9574);
var southWest = L.latLng(46.2684, 6.244);
mybounds = L.latLngBounds(southWest, northEast);
//map.setMaxBounds()
//map.option.maxZoom(14.5);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    doubleClickZoom: false,
    bounds: mybounds,
    minZoom: 10,
    maxZoom: 20,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
</script>
</main>