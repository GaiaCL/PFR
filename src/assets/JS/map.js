var map = L.map('map').setView([34.43707386084585, -119.70768739084481], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 50,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


var marker = L.marker([34.43707386084585, -119.70768739084481],
    {alt: 'The Magic Box'}).addTo(map) 
    .bindPopup('The Magic Box, 5124 MAPLE COURT DOWNTOWN SUNNYDALE');
