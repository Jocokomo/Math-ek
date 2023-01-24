<?php
  include_once 'header.php';
?>

<div>
  <?php   
    if (isset($_SESSION["useruid"])) {
      echo "<p id='bemutatkozo'>Kedves " . $_SESSION["useruid"];
    }
    else{
      echo "<p id='bemutatkozo'>Kedves felhasználó";
    }
  ?>      
  Ezt az oldalt azért hoztuk létre hogy az iskolán kívül is gyakorolhass számolni!</p>
</div>

<hr class="border border-danger border-2 opacity-50">
<div class="container">
    <h3 class="text-center">Kontakt</h3>
    <p class="text-center"><em>Szeretjük a matekot!</em></p>
  
    <div class="row">
      <div class="col-md-4">
        <p>Kérdésed van? Írj nekünk!</p>
        <p><span class="glyphicon glyphicon-map-marker"></span>Budapest</p>
        <p><span class="glyphicon glyphicon-phone"></span>Tel: +3670 407 1589</p>
        <p><span class="glyphicon glyphicon-envelope"></span>Email: fejlesztok@gmail.com</p>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Név" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Szöveg helye" rows="5"></textarea>
        <br>
        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Küldés</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  include_once 'footer.php';
?>