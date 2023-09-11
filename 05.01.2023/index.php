<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <title>Organizer</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
        <form method="post">
          <div class="wrapper">
            <h2>WYDARZENIA</h2>
          </div>
          <div id="boxix">
              <button id="fff" type="submit">ODŚWIEŻ</button>
            </form>
            <form action="index1.php">
              <button id="ffp"><img id="src" src="plus.png"></button>
            </form>
            <form action="index.php" method="post">
              <button id="ffp" name="guzik"><img id="src" src="kosz.png"></button>
            </form>
          </div>
        <div id="wrapper1">
          <?php
              $conn = mysqli_connect('localhost', 'root', '', 'wyd');
              $qrr = "SELECT nazwa, dataa FROM wyd";
              $result = mysqli_query($conn, $qrr);
              echo '<div id="boxyy">';
              while($data = mysqli_fetch_assoc($result)){
                  echo '<div class="datka">' . $data["nazwa"] . '<br>' . $data["dataa"] . '</div>';
              }
              echo '</div>';

            if(!empty($_POST['nazwa']) && !empty($_POST['data']))
                {
                    $conn = mysqli_connect('localhost', 'root', '', 'wyd');
                    $nn = $_POST['nazwa'];
                    $dd = $_POST['data'];
                    $query = "INSERT INTO `wyd` (nazwa, dataa) VALUES('$nn', '$dd')";
                    mysqli_query($conn, $query);
                    mysqli_close($conn);
                }

              function onFunc(){
                $conn = mysqli_connect('localhost', 'root', '', 'wyd');
                $query = "TRUNCATE wyd";
                mysqli_query($conn, $query);
                mysqli_close($conn);
              }

              if(isset($_POST['guzik'])) {
                onFunc();
              }
          ?>
        </div>
    </div>
  </body>
</html>