<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Działania matematyczne</title>
</head>
<body>
<?php $x=5 ?>
<?php $y=15 ?>
<?php $a=4 ?>
<?php $b=35 ?>
<?php $r=9 ?>
<?php $alfa=95 ?>
<?php $pi=pi()?>

<fieldset>
<legend>AD.1</legend>
<p>Wynik dodawania 5 i 15 <?=($x+$y)?></p>
<p>Wynik odejmowania 5 i 15 <?=($x-$y)?></p>
<p>Wynik mnożenia 5 i 15 <?=($x*$y) ?></p>
<p>Wynik dzielenia 5 i 15 <?=($x/$y)?></p>
<p>Reszta z dzielenia 5 i 15 <?=($x%$y)?></p>
</fieldset>

<fieldset>
<legend>AD.2</legend>
<p>Pole prostokąta o bokach długości 4 i 35 jest równy <?=($a*$b)?> j<sup>2</sup></p>
<p>Obwód prostokąta o bokach długości 4 i 35 jest równe <?=($a*2+$b*2)?></p>
</fieldset>

<fieldset>
<legend>AD.3</legend>
<p>Obwód koła o promieniu 16 jest równy <?=round((2*$pi*$r),4)?> l</p>
<p>Pole koła o promieniu 16 jest równe <?=round(($pi*$r**2),4)?> j<sup>2</sup></p>
<p>Pole wycinka koła o promieniu 16 i kącie środkowym 93<sup>o</sup> jest równe <?=round(($r**2*$alfa/2),4)?> j<sup>2</sup></p>
</fieldset>
</body>
</html>