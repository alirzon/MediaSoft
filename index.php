<?php

$arr = [
    "32" => '1',
    "34" => '2',
    "67" => '3',
    "43" => '4',
    "89" => '5',
    "85" => '6',
    "90" => '7',
    "88" => '8',
    "1" => '9',
    "4Э" => '10',
    "8" => '11'
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    foreach ($arr as $key=>$elem) {
        echo "{$key} => {$elem}". '</br>';
        }
        ?>
</body>
</html>
