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
    $imie = (empty($_POST['wzrost'])) ;
    if($imie == 0) {
        echo "Nie Podałeś wartosci imienia";
    }
    $nazwisko = (empty($_POST['nazwisko'])) ;
    if($nazwisko == 0) {
        echo "Nie Podałeś wartosci nazwiska";
    }
    $otobie = (empty($_POST['ot'])) ;
    if($otobie == 0) {
        echo "Nie Podałeś wartosci o tobie";
    }
    ?>
</body>
</html>