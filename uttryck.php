<?php

$variabel = 0;

if ($variabel == 1234) {
	echo "Variabeln har värdet 1234\n";
	//echo "Variabeln har ett sanningshaltigt värde"
}

if ($variabel = 1234) {
	//echo "Variabeln har värdet 1234\n";
	echo "Variabeln har ett sanningshaltigt värde: $variabel\n";
}

