<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Baza danych o pracownikach firm</title>
        <link rel="stylesheet" href="firma.css"/>
    </head>
    <body>
        <header>
            <h1>BAZA DANYCH O PRACOWNIKACH</h1>
        </header>
        <section>
            <h2>Informatycy poniżej roku 1975</h2>
            <table>
                <tr>
                    <td>Imię</td>
                    <td>Nazwisko</td>
                    <td>Pensja</td>
                </tr>
                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'firma');

                    $query = 'SELECT imie, nazwisko, pensja FROM pracownicy WHERE rok_urodzenia < 1975 AND plec Like "m" AND zawod Like "informatyk" ORDER BY pensja DESC';

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <tr>
                                <td>
                                    ' . $row['imie'] .'
                                </td>
                                <td>
                                    ' . $row['nazwisko'] .'
                                </td>
                                <td>
                                    ' . $row['pensja'] .'
                                </td>
                            </tr>
                        ';
                    }
                    
                    mysqli_close($conn);
                ?>
            </table>
        </section>
        <article>
            <h2>Sekretarki firmy "Omega"</h2>
            <ul>
                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'firma');

                    $query = 'SELECT imie, nazwisko FROM pracownicy WHERE plec Like "k" AND zawod Like "sekretarz" AND firma Like "Omega" AND pensja Like 2000';

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <li>
                                '. $row["imie"] . ' ' . $row["nazwisko"] . '
                            </li>
                        ';
                    }

                    mysqli_close($conn);

                ?>
            </ul>
            <hr>
            <div>
                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'firma');

                    $query1 = 'SELECT MAX(pensja) AS "max" FROM pracownicy;';
                    $query2 = 'SELECT MIN(pensja) AS "min"FROM pracownicy';
                    $query3 = 'SELECT AVG(pensja) AS "avg" FROM pracownicy';

                    $result1 = mysqli_query($conn, $query1);
                    $result2 = mysqli_query($conn, $query2);
                    $result3 = mysqli_query($conn, $query3);

                    while($row = mysqli_fetch_assoc($result1)) {
                        echo '
                            <p>
                                Najwyzsza pensja wynosi: '. $row["max"] .' zł
                            </p>
                        ';
                    }

                    while($row = mysqli_fetch_assoc($result2)) {
                        echo '
                            <p>
                                Najniższa pensja wynosi: '. $row["min"] .' zł
                            </p>
                        ';
                    }

                    while($row = mysqli_fetch_assoc($result3)) {
                        echo '
                            <p>
                                Średnia pensja wynosi: '. number_format((float)$row["avg"], 2, '.', '') .' zł
                            </p>
                        ';
                    }

                    mysqli_close($conn);
                ?>
            </div>
        </article>
        <footer>
            <!-- <img src="logoc.png" alt="logo"/> -->
            Autor: Jakub Szrama
            <!-- <img src="logoc.png" alt="logo"/> -->
        </footer>
    </body>
</html>