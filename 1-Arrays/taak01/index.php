
<?php $medewerkers = [
  [
    'voornaam' => 'Willem',
    'achternaam' => 'van Oranje',
    'functie'  => 'koning'
  ],
  [
    'voornaam' => 'Donald',
    'achternaam' => 'Trump',
    'functie'  => 'president'
  ]
];

/* De medewerkers-array heeft twee arrays. Een array op index 0 en een array op index 1
 *  Om een enkele waarde op het scherm te tonen doe je bijvoorbeeld dit.
 *
 *   <--medewerker-> */
echo $medewerkers[0]['voornaam']; // Willem
echo $medewerkers[0]['achternaam'];
echo $medewerkers[0]['functie'];

echo $medewerkers[1]['voornaam']; // Donald
echo $medewerkers[1]['achternaam'];
echo $medewerkers[1]['functie'];

?>