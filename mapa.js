//Llibreria Leaflet de Mapes


function mapes(lat,lon) {
    var lat = 41.150133; 
    var lon = 1.105116 ; 


var map = L.map('map').setView([41.150133, 1.105116], 7);
 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);



var punts = [{lat: lat, lng: lon, nom: 'Punt 1'}];

var latlng = L.latLng(punts[0].lat, punts[0].lng);
var marcador = L.marker(latlng).bindPopup(punts[0].nom);

var capaMarcadors = L.layerGroup([marcador]); // Crear una capa de LayerGroup amb el marcador
capaMarcadors.addTo(map); // Afegir la capa al mapa

  }
