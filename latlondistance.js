function latlondist(lat1, lon1, lat2, lon2) {
    var dlat = deg2rad(lat2 - lat1); // Convierte de grados a radianes.
    var dlon = deg2rad(lon2 - lon1); // Convierte de grados a radianes.
    var a = Math.sin(dlat / 2) * Math.sin(dlat / 2) + Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.sin(dlon / 2) * Math.sin(dlon / 2);
    var b = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    var c = (6371 * b).toFixed(2); // Distancia en km con dos decimales de precisión.
    return c;
}

function deg2rad(deg) {
    return deg * 0.017453292519943295; // deg * Math.PI / 180
}

console.log(latlondist(-17.645820, -63.336103, -17.644973, -63.141274));
