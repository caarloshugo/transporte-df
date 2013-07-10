<style>
body { margin:0; padding:0; }
#map { position:absolute; top:0; bottom:0; width:100%; }
</style>

<div id='map'></div>

<script type='text/javascript'>
var map = L.mapbox.map('map', 'caarloshugo.map-1l67y9mj', { minZoom: 2, maxZoom:7, }).setView([15.029296875, 16.46769474828896], 2);

map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();

/*
map.scrollWheelZoom.disable();
*/


/*Egipt*/
L.marker([26.5064453125, 29.126506435131713], {
    icon: L.icon({
        iconUrl: '30.png',
        iconSize:     [30, 30],
        iconAnchor:   [15, 15],
        popupAnchor:  [0, 0]
    })
}).addTo(map).bindPopup('<p><strong>Egipt</strong></p><p>OBI 2012 Score: 3</p><p><a href="http://makebudgetspublic.org/francais/?page_id=187" target="_blank">lire la suite</a></p>');

/*Vietnam*/
L.marker([12.523104144490723, 108.33984374999994], {
    icon: L.icon({
        iconUrl: '30.png',
        iconSize:     [30, 30],
        iconAnchor:   [15, 15],
        popupAnchor:  [0, 0]
    })
}).addTo(map).bindPopup('<p><strong>Vietnam</strong></p><p>OBI 2012 Score: 6</p><p><a href="http://makebudgetspublic.org/francais/?page_id=191" target="_blank">lire la suite</a></p>');

/*Fiji*/
L.marker([-17.758453653762345, 177.9931640625], {
    icon: L.icon({
        iconUrl: '30.png',
        iconSize:     [30, 30],
        iconAnchor:   [15, 15],
        popupAnchor:  [0, 0]
    })
}).addTo(map).bindPopup('<p><strong>Fiji</strong></p><p>OBI 2012 Score: 6</p><p><a href="http://makebudgetspublic.org/francais/?page_id=185" target="_blank">lire la suite</a></p>');

/*Senegal*/
L.marker([14.701215324750864, -13.96412], {
    icon: L.icon({
        iconUrl: '30.png',
        iconSize:     [30, 30],
        iconAnchor:   [15, 15],
        popupAnchor:  [0, 0]
    })
}).addTo(map).bindPopup('<p><strong>Senegal</strong></p><p>OBI 2012 Score: 10</p><p><a href="http://makebudgetspublic.org/francais/?page_id=182" target="_blank">lire la suite</a></p>');

/*Kyrgyzstan*/
L.marker([41.33634355096041, 73.96412], {
    icon: L.icon({
        iconUrl: '30.png',
        iconSize:     [30, 30],
        iconAnchor:   [15, 15],
        popupAnchor:  [0, 0]
    })
}).addTo(map).bindPopup('<p><strong>Kyrgyzstan</strong></p><p>OBI 2012 Score: 20</p><p><a href="http://makebudgetspublic.org/francais/?page_id=189" target="_blank">lire la suite</a></p>');


</script>
