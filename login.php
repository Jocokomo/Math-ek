<?php
  include_once 'header.php';
?>
<link rel="stylesheet" href="css/register_login.css">



<h2 style="text-align: center" class="container">Bejelentkezés</h2>

<section class="container">
    <form action="includes/login.inc.php" method="post">
        <input type="text" class="form-control" name="uid" placeholder="Felhasználó név / Email fiók...">
        <input type="password" class="form-control" name="pwd" placeholder="Jelszó...">
        <button type="submit" name="submit">Bejelentkezés</button>
        
        <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p style='text-align: center'>Tölts ki minden mezőt!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
              echo "<p style='text-align: center'>nem megfelelő jelszó vagy felhasználónév!</p>";
            }
          }
        ?>

    </form>
</section>

<?php
  include_once 'footer.php';
?>