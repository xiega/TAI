<?php

    if(isset($_POST['kolor'])){
        $kolor = $_POST['kolor'];
    }
    else {
        $kolor = 'hotpink';
    }



    if(isset($_POST['kolumna'])){
        $kolumny = $_POST['kolumna'];
    }
    else {
        $kolumny = 2;
    }



    if(isset($_POST['wiersz'])){
        $wiersze = $_POST['wiersz'];
    }
    else {
        $wiersze = 2;
    }


    if(isset($_POST['check'])){
        $kolor = $_POST['check'];
    }

    echo "<table border='1'>";
    for ($i=0; $i<$kolumny; $i++){
        echo "<tr style='width: 20px; height: 20px;'>";
        for ($j=0; $j<$wiersze; $j++){
            if($j%2 == $check){
                echo "<td style='background-color: $kolor'></td>";
            }
            else {
                echo "<td style='background-color: $kolor'></td>";
            }
            echo "<td style='width: 20px; height: 20px;'>$j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</html>