function getLatLonDist(lat1, lon1, lat2, lon2) {
    var radius = 6371; // Radio de la tierra en km.
    var dLat = deg2rad(lat2 - lat1); // Convierte de grados a radianes.
    var dLon = deg2rad(lon2 - lon1); // Convierte de grados a radianes.
    var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
    var b = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    var c = (radius * b * 0.6214).toFixed(2); // Distancia en millas con dos decimales de precisión.
    return c;
}

function deg2rad(deg) {
    return deg * (Math.PI / 180);
}

console.log(getLatLonDist(-17.645820, -63.336103, -17.644973, -63.141274));
