<?php 

//1. ekrane atvaizduokite teksta 'sios dienos data -' ir su php atvaizduokte sios dienos data

$string = 'Sios dienos data - ';
$date = date('Y/m/d');
$result = $string . $date;

print $result;