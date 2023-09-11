<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Wybór szlaków górskich</title>
  <style>
    /* styl dla całej strony */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    h1 {
        text-align: center;
    }

    h2 {
        text-align: center;
    }
   
    /* styl dla nagłówka strony */
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }
   
    /* styl dla formularza */
    form {
      background-color: #f2f2f2;
      border: 1px solid #ccc;
      padding: 20px;
      margin: 20px;
      max-width: 600px;
    }
   
    /* styl dla przycisku submit */
    input[type="submit"] {
      background-color: #333;
      border: none;
      color: #fff;
      padding: 10px;
      margin-top: 20px;
      cursor: pointer;
    }
   
    /* styl dla listy rozwijanej */
    select {
      padding: 10px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      background-color: #fff;
      margin-bottom: 10px;
    }

    /* styl dla zdjęcia gór */
    .mountain-image {
    display: block;
    width: 100%;
    max-width: 500px;
    margin: 0 auto 20px;
    }

    /* styl dla informacji o górach */
    .mountain-info {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* styl dla wysokości gór */
    .mountain-info p {
    margin-bottom: 0;
    font-size: 16px;
    color: #333;
    }
  </style>
</head>
<body>
  <header>
    <h1>Wybór szlaków górskich</h1>
  </header>
  <center>
  <form action="index.php" method="post">
    <label for="mountain-range">Wybierz szlak górski:</label>
    <select name="mountain-range" id="mountain-range">
      <option value="karpaty">Karpaty</option>
      <option value="sudety">Sudety</option>
      <option value="himalaje">Himalaje</option>
    </select>
    <input type="submit" value="Wybierz">
  </form>
  </center>
    <?php
        // połączenie z bazą danych
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gory";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        // pobranie wartości z formularza
        $mountain_range = $_POST["mountain-range"];

        // zapytanie SQL
        $sql = "SELECT name, szczyt, metry FROM gory WHERE name = '$mountain_range'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // wyświetlenie wyniku zapytania
            $row = $result->fetch_assoc();
            echo "<div class='mountain-range'>";
            echo "<h2>Najwyższy szczyt w górach " . $row["name"] . " to " . $row["szczyt"] . ".</h2>";
            echo "<div class='mountain-info'>";
            echo "<img src='{$row['name']}.png' alt='" . $row["name"] . "' class='mountain-image'>";
            echo "<p>Wysokość: " . $row["metry"];
            echo "</div>";
            echo "</div>";
          } else {
            echo "<h2>Nie znaleziono wyników dla szlaku " . $mountain_range . ".</h2>";
          }

        $conn->close();
    ?>
</body>
</html>