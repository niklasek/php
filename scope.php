<?php

$variabel = 1234;

if ($variabel > 0) {
	echo "Variabeln har värdet $variabel\n";
	$en_till = 4321;
}

echo "Den andra variabeln har värdet $en_till\n";

function funk() {
	$den_tredje = 1111;
	return $den_tredje;
}
$test = funk();
echo "Den tredje: $den_tredje\n";

for ($i=0; $i < 5; $i++) { 
	echo "ha";
}
echo "\n i: $i\n";
