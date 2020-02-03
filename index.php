<?php 

//1. ekrane atvaizduokite teksta 'sios dienos data -' ir su php atvaizduokte sios dienos data

$string = 'Sios dienos data - ';
$date = date('Y/m/d');
$result = $string . $date;

print $result;

echo "<br>";
 
//2. sukurti sakini is 5< zodziu. po kiekvieno zodzio yra padetas taskas. 
//Jums reikia naudojant bazines php funkcijas tuos taskus pakeisti i tarpus.

$tekstas = 'sudareme sakini is penkiu zodziu';
$str = str_replace(' ', '.', $tekstas);
print $str;

echo "<br>";
//3. sukurti stringa kuris susidarytyu is sakinio. turim jame egzistuoti didziosios ir mazosios raides. Panaudoti php default'ine funkcija
// kuri visas stringo raides paverstu didziosiomis arba mazosiomis

$text = 'Mano vardas, tomas as esu is povilaiciu seimynos';
$result = strtolower($text);
print $result;