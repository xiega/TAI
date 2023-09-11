<!DOCTYPE html>
<html>
<head>
	<title>Formularz logowania</title>
    <link rel="stylesheet" href="ksiazkiewicz.css">
</head>
<body>
    <main>
        <header>
            <h2>Schronisko</h2>
        </header>
            <section>
                <form method="post" action="wojtek_ksiazkiewicz.php">
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" id="username" name="username">

                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password">

                    <input type="submit" value="Zaloguj">
                </form>
            </section>
        <center><hr></center>
        <article>
            <?php
            if(isset($_POST['username'])) {
                error_reporting(0);

                $conn = mysqli_connect("localhost", "root", "", "schronisko");
                $username = $_POST['username'];
                $password = $_POST['password'];
                $counter = 0;

                $query = "SELECT * FROM logowanie WHERE login='$username' AND haslo='$password'";
                $result = mysqli_query($conn, $query);
                if ($result->num_rows > 0) {
				$query1 = "SELECT * FROM zwierzeta";
				$zwierzatka = $conn->query($query1);

				if ($zwierzatka->num_rows > 0) {
                    while ($wyniki = $zwierzatka->fetch_assoc()) {
                    $counter++;
                    echo    "<div class='baza'>
                                <div class='img'><img src={$wyniki['zdj']}></div>
                                <div class='tytul'><h3>{$wyniki['nazwa']}</h3></div>
                                <div class='opis'>
                                    <h4>Opis:</h4>
                                    <p>{$wyniki['opis']}</p>
                                </div>
                            </div>

                            ";
                }
                } 
                else {
                    echo "<p>Brak danych.</p>";
                }
                }
                else {
                    echo "<div class='error'>Nieprawidłowa nazwa użytkownika lub hasło.</div>";
                }
                mysqli_close($conn);
            }
            ?>
        </article>
        <footer>
            <h2>PESEL: 00000000000</h2>
        </footer>   
    </main>
</body>
<script src="ksiazkiewicz.js"></script>
</html>
