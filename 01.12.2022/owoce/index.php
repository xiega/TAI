<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portal społecznościowy</title>
    </head>
    <body>
    <form method="post" action="index.php">
        <input type="text" name="polski">
        <input type="text" name="angielski">
        <input type="submit" value="AKCJA">
    </form>
    

    <?php
                if(!empty($_POST['polski']) and !empty($_POST['angielski'])){
                    $conn = mysqli_connect('localhost', 'root','', 'owoce');
                    $qrr = "SELECT haslo FROM uzytkownicy where login like'" .$_POST['login']. "'";
                    $res = mysqli_query($conn , $qrr);
                    
                    $flag = false;
                    
                    while($row = mysqli_fetch_assoc($res)){
                        $flag = true;
                        if(sha1($_POST['pass']) == $row['haslo']){
                            $secondQrr = "SELECT login,rok_urodz,przyjaciol,hobby,zdjecie
                                FROM uzytkownicy
                                    INNER JOIN dane
                                        ON uzytkownicy.id = dane.id
                                            WHERE login LIKE '" .$_POST['login']. "'";
                            
                            $secondres = mysqli_query($conn , $secondQrr);
                           while($user = mysqli_fetch_assoc($secondres)){
                                    echo '<img alt="osoba" src = "' . $user['zdjecie'] . '"/>';
                                    echo '<h4>' . $user['login'] . '(' . (2022 - $user['rok_urodz']) . ')</h4><br>';
                                    echo 'hobby: ' . $user['hobby'];
                                    echo '<br><img src = "icon-on.png" alt="przyjaciele"/>' . $user['przyjaciol'];
                                    echo '<br><a href="dane.html">Więcej informacji</a>';
                            }
                        }
                    
                        else
                            echo "haslo nieprawdziwe";
                        }
                     if(!$flag)
                        echo "login  nie istnieje";
                }
                ?>
    </body>
</html>