<?php
//Distance between two coordinates in Miles
function latlondist($lat1, $lon1, $lat2, $lon2)
{
    $p = 0.017453292519943295;
    $a = 0.5 - cos(($lat2 - $lat1) * $p) / 2 +
        cos($lat1 * $p) * cos($lat2 * $p) *
        (1 - cos(($lon2 - $lon1) * $p)) / 2;

    return (7917.5118 * asin(sqrt($a)));
}

echo (latlondist(-17.645820, -63.336103, -17.644973, -63.141274));
