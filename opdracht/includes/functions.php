<?php

function getInput(){
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}

function getVarKind(){
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    $inputType = var_dump($input);
    echo $inputType;
}


function getProductNr(){
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount(){
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getTotPrijs(){
    $prijzen =["0.25", "0.30", "0.27", "0.50", "0.45", "0.34", "0.20", "0.40", "0.70", "0.15"];
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    switch ($productnummer) {
        case 0:
            echo $prijzen[0] * $aantalProd;
            break;
        case 1:
            echo $prijzen[1] * $aantalProd;
            break;
        case 2: 
            echo $prijzen[2] * $aantalProd;
            break;
        case 3: 
            echo $prijzen[3] * $aantalProd;
            break;
        case 4: 
            echo $prijzen[4] * $aantalProd;
            break;
        case 5: 
            echo $prijzen[5] * $aantalProd;
            break;
        case 6: 
            echo $prijzen[6] * $aantalProd;
            break;
        case 7: 
            echo $prijzen[7] * $aantalProd;
            break;
        case 8: 
            echo $prijzen[8] * $aantalProd;
            break;
        case 9: 
            echo $prijzen[9] * $aantalProd;
            break;
    }
}


function getAge(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd . " ";
}

function getAgeDis(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch ($leeftijd){
        case 16:
            echo "16 cent korting";
            break;
        case 17:
            echo "17 cent korting";
            break;
        case 18:
            echo "18 cent korting";
            break;
        case 19:
            echo "19 cent korting";
            break;
        case $leeftijd < 16:
            echo "1 euro korting";
            break;
        default:
            echo "geen korting";
            break;
    }
}
?>