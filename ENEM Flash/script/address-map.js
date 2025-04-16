var map = L.map('map').setView([-22.9482632, -47.1523533], 13);
var marker = L.marker([-22.9482632, -47.1523533]).addTo(map);
marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);