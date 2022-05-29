<?php

function latLonDist($lat1, $lon1, $lat2, $lon2)
{
    $R = 6371; // Radio de la tierra en km.
    $dLat = deg2rad($lat2 - $lat1); // Convierte de grados a radianes.
    $dLon = deg2rad($lon2 - $lon1); // Convierte de grados a radianes.
    $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
    $b = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $c = round($R * $b, 2); // Distancia en km con dos decimales de precisión.
    return $c;
};

function ($deg) {
    return deg2rad($deg * (pi() / 180));
};

echo (latLonDist(-17.645820, -63.336103, -17.644973, -63.141274));
