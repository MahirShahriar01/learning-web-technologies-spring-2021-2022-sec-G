<?php

$vat = 15;
$moneyammount= 100;
$totalvat = ($moneyammount / 100) * $vat;
$totalPrice = $moneyammount + $totalvat;
echo number_format($totalPrice, 2);
 ?>  