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

//