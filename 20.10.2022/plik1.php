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
        $text = $_POST['slowo'];
        $string = "";

        $array = explode(" ", $text);

        $pattern1 = "/[a]/";
        $pattern11 = "/[b]/";
        echo "Wszystkie słowa mające w sobie a i b: ";
        foreach($array as $string) {
            if(preg_match($pattern1, $string) and preg_match($pattern11, $string))
                echo $string . " ";
        }
        echo "<br>";

        $pattern2 = "/^a[A-Za-z0-9]{0,}b$/";
        echo "Wszystkie słowa mające na poczatku a i na koncu b: ";
        foreach($array as $string) {
            if(preg_match($pattern2, $string))
                echo $string . " ";
        }
        echo "<br>";

        $pattern3 = "/^.....$/";
        echo "Wszystkie słowa 5 literowe: ";
        foreach($array as $string) {
            if(preg_match($pattern3, $string))
                echo $string . " ";
        }
        echo "<br>";

        $pattern4 = "/^[a-zA-Z0-9]{6,}$/";
        echo "Wszystkie słowa mające więcej niż 5 liter: ";
        foreach($array as $string) {
            if(preg_match($pattern4, $string))
                echo $string . " ";
        }
        echo "<br>";

        $pattern5 = "/^[A-Z]/";
        echo "Wszystkie słowa zaczynajace sie wielka litera: ";
        foreach($array as $string) {
            if(preg_match($pattern5, $string))
                echo $string . " ";
        }
        echo "<br>";

        $pattern6 = "/[a]/";
        echo "Wszystkie słowa majace 3 litery a: ";
        foreach($array as $string) {
            if(preg_match_all($pattern6, $string) == 3)
                echo $string . " ";
        }
        echo "<br>";
    ?>

    <a href="zadanie1.php"><button>Wróć</button></a>
</body>
</html>