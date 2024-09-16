<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pierwszy.php</title>
</head>
<?php $title = 'Pierwsza strona z PHP-em' ;
$link_1 = 'http://wp.pl' ;
$link_2 = 'http://onet.pl' ;
$link_3 = 'http://interia.pl' ;
?>
<body style="padding: 20px;">
    <h1><?= $title ?></h1>
    <ol style="list-style: decimal-leading-zero">
        <li><a href="<?= $link_1 ?>">Wirtualna Polska </a></li>
        <li><a href="<?= $link_2 ?>">Onet </a></li>
        <li><a href="<?= $link_3 ?>">Interia </a></li>
</ol>
</body>
</html>