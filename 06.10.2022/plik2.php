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
        $pole = @$_POST['pole'] ;
        echo $pole . "<br>->Wpisany text<br><br>" ;
        echo strlen($pole) ."<br>->Wpisana dlugosc ciagu<br><br>" ;
        echo str_word_count($pole) ."<br>->Wpisana ilosc wyrazow<br><br>" ;
        echo strrev($pole) ."<br>->Wpisany odwrocony text<br><br>" ;
        echo strpos($pole, "woj") ."<br>->Wpisany index dla szukanego stringa<br><br>" ;
        echo str_replace('ek', 'yła', $pole) ."<br>->Wpisane zamienione slowo<br><br>" ;
    ?>
</body>
</html>