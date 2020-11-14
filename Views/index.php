<?php
  require "begin.php";
  require "../Models/database.php";
  require "../Controllers/users.php";
  $list = new Reszlet();

  foreach ($list->get() as $l) {
    echo '
      <div id="infoboxes">
      <div class="row">
      <div class="infobox">
        <h2>Fertőzöttek száma</h2>
        <h3>'.$l['MAX(total_cases)'].'</h3>
      </div>
      <div class="infobox">
        <h2>Elhunytak száma</h2>
        <h3>'.$l['MAX(total_deaths)'].'</h3>
      </div>
      <div class="infobox">
        <h2>Lakosság</h2>
        <h3>'.$l['MAX(population)'].' Fő</h3>
      </div>
      </div>
      <div class="row">
      <div class="infobox">
        <h2>Egy millió lakosra vetített fertőzött</h2>
        <h3>'.$l['MAX(total_cases_per_million)'].'</h3>
      </div>
      <div class="infobox">
        <h2>Egy millió lakosra vetített haláleset</h2>
        <h3>'.$l['MAX(total_deaths_per_million)'].'</h3>
      </div>
      </div>

      </div>';}

?>

<footer>

</footer>
