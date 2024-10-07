<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje Liczbowe</title>
</head>
<body>
<style>
    p{
        color:aliceblue;
        background-color:darkblue;
        font-weight:bold;
    }
</style>

<p>Funkcja abs dla liczby -2 zwraca wynik <?= abs(-2); ?> </p>
<p>Funkcja min dla zestawu liczb 0, 150,30, 20, -8, -200 zwraca wynik <?= min(-200,-8,0,20,30,150); ?></p>
<p>Funkcja max  dla zestawu 0, 150, 30, 20, -8, -200 zwraca wynik <?= max(-200,-8,0,20,30,150); ?></p>
<p>Funkcja pi zwraca wynik <?= pi(); ?></p>
<p>Funkcja round dla liczby 3,4 zwraca wynik <?= round(3,4); ?></p>
<p>Funkcja rounddal liczby 3,6  zwraca wynik <?= round(3,6); ?></p>
<p>Funkcja round dla liczby 5,045 zwraca wynik <?= round(5,045); ?></p>
<p>Funkcja round dla liczby 5,055 zwraca wynik <?= round(5,055); ?></p>
<p>Funkcja rand dla liczb z przedziałem od 900 do 1000 zwraca wynik<?= rand(900,1000); ?></p>
<p>Funkcja sqrt dla liczby 0 zwraca wynik <?= sqrt(0); ?></p>
<p>Funkcja sqrt dla liczby 64 zwraca wynik <?= sqrt(64); ?></p>
<p>Funkcja sqrt dla liczby 256 zwraca wynik <?= sqrt(256); ?></p>
<p>Funkcja sqrt dla liczby 65536 zwraca wynik <?= sqrt(65536); ?></p>
</body>
</html>