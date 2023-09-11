<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("kurs",  4.77);

        $a = 50;

        echo number_format($a*kurs, 2 , ',', '.');
    ?>
</body>
</html>