<?php
  include_once 'header.php';
?>
<link rel="stylesheet" href="css/register_login.css">

<h2 style="text-align: center" class="container">Regisztráció</h2>

<section class="container">

    <form action="includes/signup.inc.php" method="post">
        <input type="text" class="form-control" name="name" placeholder="Teljes név...">
        <input type="text" class="form-control" name="email" placeholder="Email...">
        <input type="text" class="form-control" name="uid" placeholder="Felhasználó név...">
        <input type="password" class="form-control" name="pwd" placeholder="Jelszó...">
        <input type="password" class="form-control" name="pwdrepeat" placeholder="Jelszó ismét...">
        <button type="submit" name="submit">Regisztráció</button>
    

  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p style='text-align: center'>Tölts ki minden mezőt!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p style='text-align: center'>Felhasználó név nem megfelelő!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p style='text-align: center'>nem megfelelő az email cím!</p>";
      }
      else if ($_GET["error"] == "passwordsontmatch") {
        echo "<p style='text-align: center'>a jelszavak nem egyeznek meg!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p style='text-align: center'>valami rosszul sült el. Próbálkozz újra!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p style='text-align: center'>foglalt felhasználó név!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p style='text-align: center'>Sikeres regisztráció!</p>";
      }
    }
  ?>
  </form>
</section>



<?php
  include_once 'footer.php';
?>