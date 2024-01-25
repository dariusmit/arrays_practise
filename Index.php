<?php

// Aprasom masyvus.

// Pats paprasciausias, vienos dimensijos masyvas.
$masyvas = [2,'5',6.02,'8','0', 4]; //Su kabutem bus string tipo, be bus integer arba float.
var_dump($masyvas);
echo "<br />";
echo "<br />";

// Vienos dimensijos asociatyvus masyvas.
$masyvas1 = [
    "foo" => "bar",
    "bar" => "foo",
];

// Dvieju dimensiju asociatyvus masyvas, kai vidinis masyvas irgi yra asociatyvus.
$masyvas2 = [
	'0' => [
			'Name' => 'Trikse',
			'Color' => 'Green',
			'Element' => 'Earth',
			'Likes' => 'Flowers'
		   ],
	'1' => [
			'Name' => 'Vardenis',
			'Element' => 'Air',
			'Likes' => 'Singning',
			'Color' => 'Blue'
		   ],
	'2' => [
			'Element' => 'Water',
			'Likes' => 'Dancing',
			'Name' => 'Jonas',
			'Color' => 'Pink'
		   ],
];

// Darbas su masyvais

echo $masyvas[0] . "<br />"; // Paprastai ne dinamiskai pasiekam 0 paprasto masyvo elementa.
echo $masyvas1['foo'] . "<br />"; // Paprastai ne dinamiskai pasiekam asociatyvaus masyvo elementa.
echo $masyvas2['1']['Element'] . "<br />"; // Paprastai ne dinamiskai pasiekam asociatyvaus masyvo elementa.

echo $masyvas[1] = 555; // Pakeiciam masyvo reiksme nauja.
echo "<br />";
echo "<br />";

foreach ($masyvas as $kintamasis) { //Sukuriam nauja masyva is esamo masyvo elementu kurie daugiau uz 5.
	if ($kintamasis > 5) {
		$masyvasNaujas[] = $kintamasis;
	}
}
echo implode(", ", $masyvasNaujas); // Atprintinam nauja masyva tvarkingai.

echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo 'Masyvas pries elementu pasalinima: ' . "<br />";
echo implode(", ", $masyvas);

// Pasalinam masyvo elementus.
for ($i = 0; $i <= count($masyvas)+1; $i++) { // Kodel ciklas runina 5 kartus nors turetu 6.
	if ($masyvas[$i] < 5) {
		$masyvasNaujas1[] = $masyvas[$i];
		unset($masyvas[$i]);	
	}
}

echo "<br />";
echo "<br />";
echo 'Masyvas po elementu pasalinimo: ' . "<br />";
echo implode(", ", $masyvas);
echo "<br />";
echo "<br />";
echo 'Elementai mazesni uz 5 sudeti i nauja masyva: ' . "<br />";
echo implode(", ", $masyvasNaujas1);
echo "<br />";
echo "<br />";

// Dabar tam naujam masyvui pridesim nauju elementu
for ($i = count($masyvasNaujas1) + 2; $i <= 10 ; $i++) {
		array_push($masyvasNaujas1, $i);
}
echo 'Pridėjom nauju elementu i masyva: ' . "<br />";
echo implode(", ", $masyvasNaujas1);
echo "<br />";
echo "<br />";

// Isrinkom reiksmes pagal filtra is asociatyvaus masyvo
foreach($masyvas2 as $kintamasis) {
	foreach($kintamasis as $raktas => $kintamasisVidinis) {
			if ($raktas == 'Likes') {
				$Pomegiai[] = $kintamasisVidinis; // Sukuriam nauja pomegiu masyva.
			}
	}
}
echo implode(", ", $Pomegiai);

?>
