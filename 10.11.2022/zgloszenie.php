<?php
    $conn= mysqli_connect('localhost','root', '','rat');
    
    $zespol=$_POST["zespol"];
    $dyspo=$_POST["dyspozytor"];
    $adres=$_POST["adres"];

   $qr="INSERT INTO zgloszenia(ratownicy_id,dyspozytorzy_id,adres,pilne,czas_zgloszenia) VALUES('$dyspo','$zespol','$adres',0,CURRENT_TIME)";

   if (mysqli_query($conn, $qr)){
        echo 'dodano';
    }
    else{
        echo'error'.$qr .":-" .mysqli_error($conn);
    }
    mysqli_close($conn);
?>