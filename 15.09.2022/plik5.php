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
        $a = 5;
        $b = 7;
        $c = (2*$a)+(2*$b);
        $d = $a*$b;

        echo "Obwód prostokąta: $c".'<br>';
        echo "Pole prostokąta: $d";

        $a2 = 5;
        $h = 7;
        $p = ($a2*$h)/2;
        echo '<br><br>'."Pole trójkąta: $p";
    ?>
</body>
</html>