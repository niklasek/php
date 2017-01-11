<?
/**
 * --Scalars
 * Boolean (true/false)
 * Integer (Heltal)
 * Float (Decimaltal)
 * String (Text)
 * --Compound
 * Array
 * Object
 * --Special
 * Resource
 * NULL (Ingenting)
 * --Pseudo types
 * Mixed
 */

$boolean = True;
var_dump($boolean);
echo "<br>";

$integer = 1484034128;
var_dump($integer);
echo "<br>";

$float = 148.4034128;
var_dump($float);
echo "<br>";

$string = "Hej!";
var_dump($string);
echo "<br>";

$array = ["ettan" => 1, "tvåan" => 2.1];
var_dump($array);
echo "<br>";

$object = (object) ["ettan" => 1, "tvåan" => 2.1];
var_dump($object);
echo "<br>";

$resource = curl_init();
var_dump($resource);
echo "<br>";

$null = NULL;
var_dump($null);
echo "<br>";
?>