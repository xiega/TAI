<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki i urlopy</title>
    <link rel='stylesheet' href='styl3.css'>
</head>
<body>
    <main>
        <header><h1>BIURO PODRÓŻY</h1></header>
        <article>
            <section>
                <h2>KONTAKT</h2>
                <a href='mailto:biuro@wycieczki.pl'>napisz do nas</a>
                <p>telefon: 555666777</p>
            </section>
            <section>
                <h2>GALERIA</h2>
                <div>
                    <?php

                        $query1 = "SELECT nazwaPliku, podpis
                        FROM zdjecia
                        ORDER BY 2 ASC;
                        ";

                        $db = new mysqli('localhost', 'root', '', 'egzamin3');

                        $result = $db->query($query1);

                        $counter = 0;
                        while ($row = $result->fetch_assoc()) {
                            $filename = $row['nazwaPliku'];
                            $describtion = $row['podpis'];

                            $filename = str_replace('.jpg', '.png', $filename);
                            echo "<img src='$filename' alt'$describtion'>";
                            if ($counter == 2) {
                                $counter = -1;
                                echo '<br>';
                            }

                            $counter+=1;

                        }

                    ?>
                </div>
            </section>
            <section>
                <h2>PROMOCJE</h2>
                <table>
                    <tr>
                        <td>Jesień</td>
                        <td>Grupa 4+</td>
                        <td>Grupa 10+</td>
                    </tr>
                    <tr>
                        <td>5%</td>
                        <td>10%</td>
                        <td>15%</td>
                    </tr>
                </table>
            </section>
        </article>
        <article>
            <h2>LISTA WYCIECZEK</h2>
        </article>
        <footer>
            <p>Strone wykonal 0000000000</p>
        </footer>
    </main>
</body>
</html>