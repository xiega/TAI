<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Formularz</div>
    <div class="content">
      <form action="pomoc.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Imie</span>
            <input name="imie" type="text" placeholder="Wpisz imie">
          </div>
          <div class="input-box">
            <span class="details">Nazwisko</span>
            <input name="nazwisko" type="text" placeholder="Wpisz nazwisko">
          </div>
          <div class="input-box">
            <span class="details">O tobie</span>
            <input name="ot" type="text" placeholder="O tobie">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Płeć</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Chłopak</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Dziewczyna</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Helikopter bojowy</span>
            </label>
          </div>
        </div><br>


        <div class="button">
          <input type="submit" value="Zapisz">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
