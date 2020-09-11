<?php


$product1 = "Carne";
$product2 = "arroz";
$product3 = "arepas";
$product4 ="chocolate";
$product5 = "huevos";
$product6 ="cafe";
$product7 = "quesito";
$product8 ="papa";
$product9 ="manzanas";
$product10="frijoles";

$precio1 ="22000";
$precio2 ="5000";
$precio3 ="6000";
$precio4 ="2500";
$precio5 ="11000";
$precio6 ="7500";
$precio7 ="8000";
$precio8 ="5000";
$precio9 ="8000";
$precio10 ="7000";


$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;



// if($total<=80000)
// {
//  echo("Puede pagar");
// }
// else
// {
//    echo("No le alcanza la plata mijo");
// }

switch($product9)
{
    case 'manzanas':
     echo("tiene descuento del 10%");
    break;
    case 'banano':
        echo('Tiene descuento del 5%');
    break;
    default:
    echo('No hay descuento');
    break;
}



?>