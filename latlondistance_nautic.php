<?php

function latlondist($lat1, $lon1, $lat2, $lon2)
{
    $dlat = deg2rad($lat2 - $lat1); // Convierte de grados a radianes.
    $dlon = deg2rad($lon2 - $lon1); // Convierte de grados a radianes.
    $a = sin($dlat / 2) * sin($dlat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dlon / 2) * sin($dlon / 2);
    $b = 2 * asin(sqrt($a));
    $c = round(6371 * $b * 0.539957, 2); // Distancia en millas náuticas con dos decimales de precisión.
    return $c;
};

echo (latlondist(-17.645820, -63.336103, -17.644973, -63.141274));
