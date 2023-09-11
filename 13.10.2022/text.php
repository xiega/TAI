<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $text = "2or02i9jr0i2jr2094jhr9204jhr9024jhr290ijr2i09jri2jr2ijr2i09jhrui9042jr";
        $text = preg_replace("/o/i",  '<span style="background: green; color: white;"></span>', $text);
        echo $text;
    ?>
</body>
</html>