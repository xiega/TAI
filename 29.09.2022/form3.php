<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>zad3</title>
    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg .tg-baqh{text-align:center;vertical-align:top}
    </style>
</head>
<body>
    <?php
        $a = $_POST["dane"];
        $b = $_POST["dane1"];
        $d = 15;
            
        $cena1 = 2.5*$a;
        $cena2 = 5*$b;

        $suma = $cena1+$cena2;

        if ($a >= 2){
            $d = 0;
        }

        echo "<table class='tg'>
            <thead>
            <tr>
                <th class='tg-baqh'>NAZWA</th>
                <th class='tg-baqh'>LICZBA</th>
                <th class='tg-baqh'>CENA</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class='tg-baqh'>Pizza</td>
                <td class='tg-baqh'>$a</td>
                <td class='tg-baqh'>$cena1</td>
            </tr>
            <tr>
                <td class='tg-baqh'>Placki</td>
                <td class='tg-baqh'>$b</td>
                <td class='tg-baqh'>$cena2</td>
            </tr>
            <tr>
                <td class='tg-baqh'>Dostawa</td>
                <td class='tg-baqh'>1</td>
                <td class='tg-baqh'>$d</td>
            </tr>
            <tr>
                <td class='tg-baqh'>Do zapłaty</td>
                <td class='tg-baqh'>X</td>
                <td class='tg-baqh'>$suma</td>
            </tr>
            </tbody>
        </table>";
    ?>  
</body>
</html>