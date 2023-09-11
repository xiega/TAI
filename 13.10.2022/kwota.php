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
        $value = $_POST['liczba'];
        $valueStart = $value;
        $numberOfTen = (int)($value/10);
        $value = $value%10;
        $numberOfFive = (int)($value/5);
        $value = $value%5;
        $numberOfTwo = (int)($value/2);
        $value = $value%2;
        $numberOfOne = $value/1;

        echo'Kwota: '. $valueStart. '<br>';
        echo'Ilośc 10: '. $numberOfTen. '<br>';
        echo'Ilośc 5: '. $numberOfFive. '<br>';
        echo'Ilośc 2: '. $numberOfTwo. '<br>';
        echo'Ilośc 1: '. $numberOfOne. '<br>';


    ?>

    <a href="plik_kwota.php"><button>Wróć</button></a>
</body>
</html>