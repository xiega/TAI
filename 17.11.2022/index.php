<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>zadanie</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <main>
        <header><h1>Forum wielbicieli psów</h1></header>
        <section id='left'>
            <article><img src='dog.png'></article>
        </section>
        <section id='right'>
            <article id='top'>
                <header>Zapisz się</header>
                <div>
                    <form action='' method='get'>
                        Login: <input type='text' name='login'><br>
                        Password: <input type='text' name='password'><br>
                        Repeat password: <input type='text' name='passwordRepeat'><br>
                        <input type="submit" value="submit">
                    </form>
                    <?php
                        $conn = mysqli_connect(
                            'localhost',
                            'root',
                            '',
                            'psy'
                        );
                        $query = "SELECT login FROM uzytkownicy";
                        $result = mysqli_query($conn, $query);

                        $handler = 0;
                        $handler_exists = 'Konto juz istnieje w bazie danych nie dodano nowego loginu';
                        $handler_password = 'Hasla nie sa rowne, konto nie utworzone';
                        $handler_success = 'konto zostalo dodane';
                        $handler_fill = 'uzupelnij wszystkie pola';

                        if (
                            !empty($_GET['login']) &&
                            !empty($_GET['password']) && 
                            !empty($_GET['passwordRepeat'])
                            )
                        {
                            $login = $_GET['login'];
                            $password = $_GET['password'];
                            $passwordRepeat = $_GET['passwordRepeat'];

                            while ($arr = mysqli_fetch_array($result)) {
                                if ($login == $arr[0]) {
                                    echo '<p>'.$handler_exists.'</p>'.$conn->error;
                                    $handler = 1;
                                    break;
                                }
                            }
                            

                            if ($password != $passwordRepeat && $handler == 0) {
                                echo '<p>'.$handler_password.'</p>';
                                $handler = 1;
                            }

                            if ($handler == 0) {
                                $hash = password_hash($password, PASSWORD_DEFAULT);
                                $result = mysqli_query($conn,
                                "INSERT INTO uzytkownicy (login, haslo) VALUES 
                                    ('".$login."', '".$hash."')"
                                );
                                echo $handler_success;
                            }

                        }
                        else {
                            echo $handler_fill;
                        }

                        
                    ?>
                    <br>
                </div>
            </article>
            <article id='bot'>
                <h3>Zapraszamy wszystkich</h3>
                <pre>1. wlascicieli psow
2. weteryarzy
3. tych co chce kupic
4. tycho co lubia psy</pre>
                <a>Przecztaj regulamin forum</a>
            </article>
        </section>
    </main>
</body>
</html>