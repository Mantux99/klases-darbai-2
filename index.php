<?php 
// print 'veikia';
// echo 'veikia2';
// // productione rasomos sios komandos, kai norima isitikinti kaip vaiksto informacija, atvaizdavimui naudosime echo ir print:
// print_r('veikia3');
// var_dump('veikia4');

// //kintamuju tipai
// $string ='tekstas'; //string
// $boolean = true; //boolean
// $int = 1;//integer arba int (duoda sveikus skaicius, be kableliu)
// $float = 2.6; //float

// // isvedame i ekrana:
// print $string;
// print $boolean;
// print $int;
// print $float;

// // turime 4 kintamuosius, printinsim per viena eilute taupant eilutes, rezultatas, vaizdas, tas pat:
// print $string .' '. $boolean .' '. $int . ' ' . $float; //kabutes tarp tasku daro tarpa

// // uzduotis:
// $a = 9;
// $b = 10;
// $c = $a + $b;

// print $a.'+'.$b.'='.$c; 

// // Suvedame kintamuosius ir gale patikriname ar jie vienodo tipo ir ar lygus, jei desime == parodys kad true, jei desime === parodys kad false, kadangi === tikrina ir
// // skaucius ir tipa, o == tik skaicius;
// $kintamasis = 1;
// $kintamasis2 = '1';

// $kintamasis === $kintamasis2;

// $kintamasis = 1;
// print $kintamasis-=1; //cia rasome ka darome su ta reiksme, - reiskia atimam , o 1 reiskia koki skaiciu atimam, tai gali buti ir pvz skaicius 4
// print $kintamasis; //cia kiek kartu printinsime gauta atsakyma.

// // (20 < $i <39);

// $skaicius = 4; //integer
// $skaicius2 ='4'; //string
// if ($skaicius === '4') {
//     print 'skaicius lygus ketvertui';
// }else{
//     print 'kazkas negerai';
// }

// $vardas = 'Tomas';
// $amzius = 27;
// $statusas = 'studentas';
//pirmas variantas: (uzkomentuotas kad veiktu kiti variantai)
// if ($amzius >= 18 && $amzius <=27 && $statusas != 'studentas') {
//    print 'esi saukiamas';
// }else{
//     print 'netinkamas' . '' . $vardas;
// }

// if ($amzius<18 || $amzius>27 && $statusas =='studentas' || $statusas == 'pencininkas') {
//     print 'netinkamas';
// }else if($amzius>=18 || $amzius<=27 && $statusas !='studentas' || $statusas != 'pencininkas'){
//     print 'esi saukiamas';
// }

//darome kauliuku zaidima
$kauliukas1 = rand(1,6);
$kauliukas2 = rand(1,6);

$pckauliukas1 = rand(1,6);
$pckauliukas2 = rand(1,6);

$kauliukusuma = $kauliukas1 + $kauliukas2;
$pckauliukusuma = $pckauliukas1 + $pckauliukas2;

print "mano kauliuku suma $kauliukusuma <br>";
print "pc kauliuku suma $pckauliukusuma <br>";

// if ($kauliukusuma > $pckauliukusuma) {
//     print 'as laimejau';
// }else if ($kauliukusuma < $pckauliukusuma) {
//     print 'laimejo kompiuteris';
// }else{
//     print 'lygiosios';
// }

if ($kauliukusuma > $pckauliukusuma) {
    $rezultatas = 'as laimejau';
}else if ($kauliukusuma < $pckauliukusuma) {
    $rezultatas = 'laimejo kompiuteris';
}else{
    $rezultatas = 'lygiosios';
}

if ($kauliukas1 ==1) {
    $imgVienas ="images/dice1.png";
}

if ($kauliukas1 ==2) {
    $imgVienas ="images/dice2.png";
}
if ($kauliukas1 ==3) {
    $imgVienas ="images/dice3.png";
}
if ($kauliukas1 ==4) {
    $imgVienas ="images/dice4.png";
}
if ($kauliukas1 ==5) {
    $imgVienas ="images/dice5.png";
}
if ($kauliukas1 ==6) {
    $imgVienas ="images/dice6.png";
}

if ($kauliukas2 ==1) {
    $imgDu ="images/dice1.png";
}

if ($kauliukas2 ==2) {
    $imgDu ="images/dice2.png";
}
if ($kauliukas2 ==3) {
    $imgDu ="images/dice3.png";
}
if ($kauliukas2 ==4) {
    $imgDu ="images/dice4.png";
}
if ($kauliukas2 ==5) {
    $imgDu ="images/dice5.png";
}
if ($kauliukas2 ==6) {
    $imgDu ="images/dice6.png";
}

// OPONENTO KAULIUKAI

if ($pckauliukas1 ==1) {
    $pcimgVienas ="images/dice1.png";
}

if ($pckauliukas1 ==2) {
    $pcimgVienas ="images/dice2.png";
}
if ($pckauliukas1 ==3) {
    $pcimgVienas ="images/dice3.png";
}
if ($pckauliukas1 ==4) {
    $pcimgVienas ="images/dice4.png";
}
if ($pckauliukas1 ==5) {
    $pcimgVienas ="images/dice5.png";
}
if ($pckauliukas1 ==6) {
    $pcimgVienas ="images/dice6.png";
}

if ($pckauliukas2 ==1) {
    $pcimgDu ="images/dice1.png";
}

if ($pckauliukas2 ==2) {
    $pcimgDu ="images/dice2.png";
}
if ($pckauliukas2 ==3) {
    $pcimgDu ="images/dice3.png";
}
if ($pckauliukas2 ==4) {
    $pcimgDu ="images/dice4.png";
}
if ($pckauliukas2 ==5) {
    $pcimgDu ="images/dice5.png";
}
if ($pckauliukas2 ==6) {
    $pcimgDu ="images/dice6.png";
}

// dedame html karkasa:
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div>
        <img src="<?php print $imgVienas ?>" alt="">
        <img src="<?php print $imgDu ?>" alt="">
        </div>
        <div>
        <img src="<?php print $pcimgVienas ?>" alt="">
        <img src="<?php print $pcimgDu ?>" alt="">
        </div>
    
</body>
</html>

<!-- ismokti PHP operators -->