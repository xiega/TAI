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

        //======================================================================
        // napisz skrypt który wypisze większa z dwóch zadeklarowanych zmiennych
        //======================================================================

        $number1 = 5;
        $number2 = 7;
        if($number1>=$number2){
            echo "wieksza z 5 i 7: $number1";
        }
        else{
            echo "wieksza z 5 i 7: $number2";
        }

        //==========================================
        // wypisz w kolejnosći rosnacej trzy liczby;
        //==========================================

        echo '<hr>';
        $n1 = 2;
        $n2 = 4;
        $n3 = 6;

        //====================
        // n1 jest najmniejsze 
        //====================

        if($n1<=$n2 && $n1<=$n3){
            echo "liczby 2, 4 i 6 w kolejnosci rosnacej:  $n1";
            if($n2<$n3){
                echo "$n2";
                echo "$n3";
            }
            else{
                echo "$n3";
                echo "$n2";
            }
            
        }

        //====================
        // n2 jest najmniejsze 
        //====================

        else if($n2<=$n1 && $n2<=$n3){
            echo "liczby 2, 4 i 6 w kolejnosci rosnacej:  $n2";
            if($n1<$n3){
                echo "$n1";
                echo "$n3";
            }
            else{
                echo "$n3";
                echo "$n1";
            }
        }

        //====================
        // n3 jest najmniejsze 
        //====================

        else if($n3<=$n2 && $n3<=$n1){
            echo "liczby 2, 4 i 6 w kolejnosci rosnacej:  $n3";
            if($n1<$n2){
                echo "$n1";
                echo "$n2";
            }
            else{
                echo "$n2";
                echo "$n1";
            }
        }

        echo '<hr>';
 
        //==================================
        // wypisz 10 licz malejąco i rosnaco
        //==================================

        echo 'Rosnąco: ';
        for($i = 1; $i<=10;$i++){
            echo "$i, ";
        }
        echo '<hr> Malejąco: ';
        for($i = 10; $i>=1;$i--){
            echo "$i, ";
        }

        echo '<hr>';

        //==================================
        // sprawdza czy liczba jest pierwsza
        //==================================

        $a = 6;
        $licznik = 0;

        for($i = 2; $i<=$a; $i++){
            if($a%$i == 0) {
                $licznik++;
            }
        }

        if($licznik == 1) {
            echo "$a jest liczba pierwszą";
        }
        else {
            echo "$a nie jest liczba pierwszą";
        }

        echo '<hr>';
        
    ?>
</body>
</html>