<!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Animated Search Bar </title>

        <link rel="stylesheet" href="style.css">
                        
    </head>
    <body>
        <header>
            <h1>BIBLIOTEKA INTERNETOWA</h1>
        </header>
        <nav>
            <form method="post">
                <span>Wybierz autora: </span>
                <select name="wybor">
                    <option value="Krzysiek Briks">Krzysiek Briks</option>
                    <option value="Nikko Nikkowski">Nikko Nikkowski</option>
                    <option value="Dajwajo Matelski">Dajwajo Matelski</option>
                    <input type="submit" value="Zatwierdz">
                </select>
            </form>
        </nav>
        <article>
            <aside>
                <h1>Dostępne książki wybranego autora: </h1><h1 id="autor">  <?php echo "&nbsp;" . $_POST['wybor']; ?></h1>
            </aside>

            <div id="php">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'biblia');
                $nazwa = $_POST['wybor'];
                $qrr = "SELECT tytul, cena FROM biblia WHERE autor LIKE \"%$nazwa%\" AND dostepnosc LIKE \"T\";";
                $result = mysqli_query($conn, $qrr);
                    while($data = mysqli_fetch_assoc($result))
                    {
                        echo '<div class="boxyy"><b>' . $data["tytul"] . '</b>' . ' - cena za wypożyczenie: ' .  $data["cena"] . ' zł' . '<br></div>';
                    }
                ?>
          </div>
        </article>
        
    </body>
</html>