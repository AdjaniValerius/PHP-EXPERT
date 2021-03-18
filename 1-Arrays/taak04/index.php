<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];

foreach ($speelgoed as $key => $speelgoed){
    echo 'Speelgoed' . " " . $speelgoed['naam'] . " uit de categorie " . $speelgoed['soort'] . " kost " . "€" . $speelgoed['prijs'];
    echo "<br>";
}


$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];
echo "<br>";
foreach ($games as $key => $game){
    echo 
    '<br>' .'Speelgoed' .  " " . $game['naam'] . " " . 'van de uitgever' . " " . $game['uitgever'] . " " . 'kost' . " " . '€' . $game['prijs']; 
;
}
