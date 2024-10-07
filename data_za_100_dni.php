<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8 godzin później</title>
</head>
<body>
  
    <fieldset>
<legend> Dzisiejsza data </legend>
<p> <?=date('07.10.2024')?> </p>
</fieldset>
<fieldset>
    <legend> Data za 100 dni </legend>
 <p> <?=date('G:i:s', time() + 1440 * 100)?> </p>
 <fieldset>
</body>
</html>