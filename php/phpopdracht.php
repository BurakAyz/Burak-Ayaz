<?php

//opdracht 1

//$tijd = date("H:i");

//if ($tijd < "12:00") {
//    echo "Goedemorgen". "<br>";
//} else if ($tijd < "18:00") {
//    echo "Goedemiddag";
//} else {
//    echo "Goedenavond";
//}

//echo "De huidige tijd is: " . $tijd;

//opdracht 2

//function berekenGemiddelde($getal1, $getal2) {
//    $gemiddelde = ($getal1 + $getal2) / 6;
//    echo "Het gemiddelde is: " . $gemiddelde; 
//}

//berekenGemiddelde(8, 23); 

//opdracht 3 

//echo "vandaag is het " . date("Y/m/d") . "<br>";

//function resterendeDagenTotEindeJaar() {
//    $huidigeDatum = date("Y-6-12");
//    $eindeJaar = date("Y-12-31");

//    $verschil = strtotime($eindeJaar) - strtotime($huidigeDatum);
//    $resterendeDagen = ceil($verschil / (60 * 60 * 24));
//    return $resterendeDagen;
//}
//echo "Er zijn nog " . resterendeDagenTotEindeJaar() . " dagen tot het einde van het jaar.";

//opdracht 4

function berekenTotaleLengte($strings) {
    $totaleLengte = 0;

    foreach ($strings as $string) {
        //$totaleLengte += strlen($string);
    }

    return $totaleLengte;
}

$array = array("Dit", "Is", "Een", "Test");
echo "De lengte van de strings is: " . berekenTotaleLengte($array);

?>

