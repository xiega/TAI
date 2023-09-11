<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FotoSzefik</title>
  <link rel="stylesheet" href="style.css">
  <link href="css/fontello.css" rel="stylesheet" type="text/css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#">FotoSzefik</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="#">Home</a></li>
        <li><a href="#apa">Aparaty</a></li>
        <li><a href="#dos">Dostepność</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="banner"></div>
  <a name="apa"></a>
  <div class="about">
    <div class="content">
      <div class="title">Aparaty</div>
      <div id="baza">
        <?php
          $conn = mysqli_connect('localhost', 'root', '', 'foto');
          $qrr = "SELECT name, dos, obrazek, opis, cena FROM foto";
          $result = mysqli_query($conn, $qrr);
          while($foto = mysqli_fetch_assoc($result))
          {
            echo "<div class='aparat'>
            <div class='zdj'><img src='{$foto['obrazek']}.png'></div>
            <div class='opis'>{$foto['opis']}</div>
            <div class='cena'>{$foto['cena']} zł</div>
            </div>";
          }
          mysqli_close($conn);
        ?>
      </div>
    </div>
    <a name="dos"></a>
    <div class="skontaktuj">
      <center>
        <div class="info"><i class="icon-info"><p class="inforacja">Niektóre Aparaty nie są dostepne w sklepie FotoSzefik lecz są w stanie państwo zamówić poprzez kontakt telefoniczny. Mogą państwo sprawdzic dostępnośc aparatów korzystając z formularza poniżej</p></i></div>
        <div class="title">Dostępność</div>
      </center>
      <?php
        if (!empty($_POST['name']))
        {
          $conn = mysqli_connect('localhost', 'root', '', 'foto');
          $qrr = "SELECT name, dos FROM foto WHERE name = '" . $_POST['name'] . "'";
          $result = mysqli_query($conn, $qrr);
          while($foto = mysqli_fetch_assoc($result))
          {
            if ($foto['dos'] == 1) 
              echo "<div id='suc'><center>twój aparat {$foto['name']} jest dostępny</center></div>";
            else
              echo "<div id='alert'><center>twój aparat {$foto['name']} jest niedostępny</center></div>";
          }
          mysqli_close($conn);
        }
      ?>
      <form class="form" action="index.php" method="post">
        <div class="pole">
          <label for="field-name">Nazwa*</label>
          <input type="text" name="name" required id="field-name">
        </div>
        <div class="pole">
          <label class="guzik">
            <input type="checkbox" data-error="Musisz wypełnić pole" name="regulation">
            <i class="tak" aria-hidden="true"></i>
            <span>Korzystając z formularza, zgadzasz się na przechowywanie i przetwarzanie twoich danych przez
              witrynę.</span>
          </label>
        </div>
        <div class="pole">
          <button type="submit" class="wyslij">Wyślij</button>
        </div>
      </form>
      <a name="dos"></a>
    </div>

    <script>
      const body = document.querySelector("body");
      const navbar = document.querySelector(".navbar");
      const menuBtn = document.querySelector(".menu-btn");
      const cancelBtn = document.querySelector(".cancel-btn");
      menuBtn.onclick = () => {
        navbar.classList.add("show");
        menuBtn.classList.add("hide");
        body.classList.add("disabled");
      }
      cancelBtn.onclick = () => {
        body.classList.remove("disabled");
        navbar.classList.remove("show");
        menuBtn.classList.remove("hide");
      }
      window.onscroll = () => {
        this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
      }
    </script>

</body>

</html>