<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portal społecznościowy</title>
        <link rel="stylesheet" href="styl5.css">
    </head>
    <body>
        <div id="hs">
            <header id="h1"><h2>Nasze osiedle</h2></header>
            <header id="h2">
                <?php
                    $conn = mysqli_connect('localhost','root','','portal');
                    $sql = 'SELECT count(id) as "Liczba wierszy" FROM dane';
                    $result = mysqli_query($conn,$sql);
                    $number = "Liczba użytkowników portalu wynosi: ";
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<h5>$number{$row['Liczba wierszy']}</h5>";
                    }
                ?>
            </header>
        </div>
        <div id="ss">
            <section id="s1">
                <h3>Logowanie</h3><br>
                <form method="POST">
                    <label for="log">Login</label><br>
                    <input type="text" name="login" id="log"><br>
                    <label for="psswrd">Haslo</label><br>
                    <input type="password" name="pass" id="psswrd"><br>
                    <input type="submit" value="Zaloguj">
                </form>
            </section>
            <section id="s2">
                <h3>Wizytówka</h3>
                <div id="card">
                <?php
                if(!empty($_POST['login']) and !empty($_POST['pass'])){
                    $conn = mysqli_connect('localhost', 'root','', 'portal');
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
                </div>
            </section>
        </div>
        <footer><span>Stronę wykonał: 00000000000</span></footer>
    </body>
</html>