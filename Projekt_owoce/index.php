<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <title>Translate</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
        <form method="post">
          <div class="wrapper">
            <input id="owo" type="text" name="owoc" placeholder="PODAJ NAZWĘ OWOCKA PO POLSKU">
          </div>
          <div id="boxix">
            <button id="fff" type="submit">Tłumacz</button>
          </form>
          <form action="index1.php">
            <button id="ffp"><img id="src" src="plus.png"></button>
          </form>
          </div>
        <div id="wrapper1">
          <?php
            if (!empty($_POST['owoc']))
            {
              $conn = mysqli_connect('localhost', 'root', '', 'owoce');
              $qrr = "SELECT polski, angielski, obrazek FROM owoce WHERE polski = '" . $_POST['owoc'] . "'";
              $result = mysqli_query($conn, $qrr);
              while($owoc = mysqli_fetch_assoc($result)){
                  echo "{$owoc['angielski']}";
                  echo "<br><img id='img' src = '{$owoc['obrazek']}' ";
              }
            }

            if(!empty($_POST['pol']) && !empty($_POST['eng']))
                {
                    $conn = mysqli_connect('localhost', 'root', '', 'owoce');
                    $pl = $_POST['pol'];
                    $en = $_POST['eng'];
                    $im = $_POST['eng'];
                    $im .= ".jpg";
                    $query = "INSERT INTO `owoce` (polski, angielski, obrazek) VALUES('$pl', '$en', '$im')";
                    mysqli_query($conn, $query);
                    mysqli_close($conn);
                }
          ?>
        </div>
    </div>
  </body>
</html>