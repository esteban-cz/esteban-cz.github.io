<?php

$jmena = "Jan, MartinA Pavel; frantisek,faRiza : Petr _ MARTIN -filip daSa";



$jmena1 = str_replace(",", ";", $jmena);



$jmena2 = str_replace("_", ";", $jmena1);



$jmena3 = str_replace("-", ";", $jmena2);



$jmena4 = str_replace(":", ";", $jmena3);



$jmena5 = str_replace(" ;", ";", $jmena4);



$jmena6 = str_replace(" ", ";", $jmena5);



$jmena7 = str_replace(";;", ";", $jmena6);



$jmena8 = str_replace(";", "; ", $jmena7);



$jmena9 = strtolower($jmena8);



$jmena10 = ucwords($jmena9);



$jmena11 = str_replace(";", "", $jmena10);




$jmena12 = explode(" ", $jmena11);



$jmena13 = implode(":", $jmena12);

var_dump($jmena13);












$slova = array("covid", "chripka", "banan");

$vyhledavaciPole = "covid bolest hlavy";

echo isShowCovidBar($slova, $vyhledavaciPole);



function isShowCovidBar(array $slova, string $hledat)
{

    foreach ($slova as $value) {

        if(!strpos($hledat, $value) === false){
            return $value ." je zakazano !!";
        }

    }

}
#var_dump($vyhledavaciPole);

die;


echo secti(1, 2);
echo secti(2, 3);
echo secti(1000, 5);


function secti(float $cislo1, float $cislo2)
{

    return $cislo1 + $cislo2;

}


echo getPrice(4587.258754, 1.15);
echo "<br>";
echo getPrice(45.5466, 1.05);
echo "<br>";
echo getPrice(1.30, 1.15);
echo "<br>";
echo getPrice(220.46546, 1.15);
echo "<br>";
echo getPrice(35871.2587, 1.15, 3);


/**
 * Vypocte cenu s DPH
 * @param float $price
 * @param float $dph
 * @param int $precision
 * @return float
 */
function getPrice(float $price, float $dph, int $precision = 2)
{

    $total_price = $price * $dph;
    $total_price = round($total_price, $precision);
    $total_price = number_format($total_price, $precision, '.', ' ');
    return $total_price;
}


echo "<br>";
echo "<br>";
echo "<br>";


$pole = array('banan', 'malina', 'jablko', 'hruska');


echo $pole[1];
echo "<br>";
echo $pole[0];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

foreach ($pole as $key => $value) {
    $key++;
    echo $key . ". " . $value . "<br>";

}


echo "<br>";
echo "<br>";
echo "<br>";


for ($i = 0; $i < 10; $i++) {
    // vnitrni cyklus
    echo $i . " vnejsi cyklus ";

    for ($j = 0; $j < 10; $j++) {
        echo $j . " vnitrni cyklus ";
    }
}


$auta = array();
$auta["osobni"]["skoda"]["fabia"]["combi"]["vin"] = 3256484161354;
$auta["osobni"]["skoda"]["fabia"]["combi"]["barva"] = "modra";

$auta["osobni"]["renault"]["clio"]["hybrid"]["vin"] = 335000;


$auta["nakladni"]["liaz"]["T-20"]["cisterna"]["vin"] = 969858569416;

var_dump($auta["osobni"]["skoda"]);

echo "Ahoj";

echo "<br>";

echo 300 / 30;
?>
    <br>
    echo 300/30;

<?php
echo("dsfds");
echo "<br>";
echo "sfdsfsd";
echo "<br>";

$jmeno = "Arnost";

echo $jmeno;

echo "<br>";

$jmeno = "Eva";

echo $jmeno;

echo "<br>";

$cena = 12.90;

echo $cena * 1.21;

echo "<br>";


$a = 1;
$b = 2;

$a = $b;
$a == $b;

#################################################################################
$cislo1 = 2;
$cislo2 = 2;

echo "<br>";
echo $cislo1;
echo "<br>";
echo $cislo2;
echo "<br>";
var_dump($cislo1);
echo "<br>";
var_dump($cislo2);
echo "<br>";


$a = 1;
var_dump($a);
$a = 1.455;
var_dump($a);
$a = FALSE;
var_dump($a);
$a = "dsadsa";
var_dump($a);


//var_dump($cislo1 = $cislo2);
//var_dump($cislo1 == $cislo2);
//var_dump($cislo1 === $cislo2);


echo "<br><br>";
$b = 6;
$c = "6";

if ($b !== $c) {

    echo "plati";

}

$cislo1 = 6;
$cislo2 = 1;

if ($cislo1 < 5) {

    if ($cislo2 < 7) {
        echo "tato podmínka platí";
        // vypíše se tato věta
    }
} else {
    echo "neni pravda";
}


$cislo3 = 5;
$cislo4 = "5";

if ($cislo3 == $cislo4) {

    echo "cislo 3 je rovno cislu 4";
}


$cislo1 = 6;
$cislo2 = 7;

if ($cislo1 === $cislo2) {

    echo "cislo 1 je rovno cislu 2";

} elseif ($cislo1 <= $cislo2) {

    echo "cislo 1 <= cislu 2";

} else {

}
echo "<br><br><br>";


switch (2) {
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    default:
        echo "to se vypíše když nic neplatí";
}


const NECO = 3;

echo "<br>";

$data = 1;
echo $data;

echo "<br>";

$data = 3;
echo $data;


"Jana NOVÁKOVÁ, JAN NOVAK; Katerina Novakova";


echo "<br>";
//echo NECO;


/**
 * takto jednoduše řekneme, že proměnná je pole
 */
$produkt = array(100 => "Tereza", "Darya", "Egor", "Alex", "Ales", "Frantisek", "Pepa");
// vypíšeme-li proměnnou $produkt pomocí funkce php var_dump()
// která vypíše i datový typ, uvidíme, že proměnná je opravdu
// pole (array)
echo "<br>";

$produkt[] = "Lucie";

echo $produkt[100];

var_dump($produkt);


$produkty = array();

$produkty[1]["cislo"] = 10;
$produkty[1]["nazev"] = "NTB HP4545";
$produkty[1]["barva"] = "bila";
$produkty[1]["cena"] = 15230;

$produkty[2]["cislo"] = 11;
$produkty[2]["nazev"] = "NTB HP4546";
$produkty[2]["barva"] = "cerna";
$produkty[2]["cena"] = 18700;

$produkty[3]["cislo"] = 12;
$produkty[3]["nazev"] = "NTB HP4000";
$produkty[3]["barva"] = "cerna";
$produkty[3]["cena"] = 12000;


echo "<table border=\"1\" width=\"100%\">";

$a = 1;

foreach ($produkty as $keyp => $valuep) {

    echo "<tr>";

    if ($a === 1) {
        echo "<td></td>";

        foreach ($valuep as $keyc => $valuec) {
            echo "<td>" . $keyc . "</td>";
        }
        echo "</tr>";
    }

    echo "<tr>";

    echo "<td>" . $a . "</td>";

    foreach ($valuep as $valuec) {
        echo "<td>" . $valuec . "</td>";
    }
    echo "</tr>";

    $a++;
}

echo "</table>";


echo "<br><br>";


$radek = 20;
$sloupec = 10;

for ($i = 1; $i <= $radek; $i++) {

    echo $i . "-";

    for ($y = 1; $y <= $sloupec; $y++) {
        echo $y;
    }

    echo "<br>";

}









