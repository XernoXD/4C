<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8 godzin później</title>
</head>
<body>
<h2>Aktualna godzina <?=date('G:i:s')?></h2>
<h3>Osiem godzin później <?=date('G:i:s', time() + 60 * 60 *8)?></h3>
</body>
</html>