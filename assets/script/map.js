const map = L.map('map').setView([0.6297225, 118.7105768], 5);

map.scrollWheelZoom.disable()

L.marker([-8.7968703, 115.1400516]).addTo(map); // bali
L.marker([-0.0353948, 109.2903507]).addTo(map); // pontianak
L.marker([-8.2169245, 114.3455512]).addTo(map); // semarang
L.marker([-8.7968703, 115.1400516]).addTo(map); // banyuwangi
L.marker([-7.275612, 112.6302822]).addTo(map); // surabaya
L.marker([-4.8688851, 135.1672656]).addTo(map); // papua
L.marker([-7.7829218, 110.3622048]).addTo(map); // yogyakarta
L.marker([-8.5829756, 115.9433416]).addTo(map); // lombok
L.marker([4.0397955, 95.3294172]).addTo(map); // aceh

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);