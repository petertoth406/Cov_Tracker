<?php
require "begin.php";
 ?>
  <div class="table100 ver2 m-b-110">
  <div class="table100-head">
  <table>
  <thead>
  <tr class="row100 head">
  <th class="cell100 column1">Dátum</th>
  <th class="cell100 column2">Napi Fertőzött</th>
  <th class="cell100 column3">Napi Halott</th>
  <th class="cell100 column4">Összes fertőzött</th>
  <th class="cell100 column5">Összes halott</th>
  <th class="cell100 column6">Halottszám 1 millió főre</th>
  </tr>
  </thead>
  </table>
  </div>
  <div class="table100-body js-pscroll">
  <table>
  <tbody>

  <?php
  require "../Models/database.php";
  require "../Controllers/users.php";
  $country = new Country();

  echo $szur;

  foreach ($country->get() as $c) {
    echo '<tr class="row100 body">
        <td class="column1">'.$c['datum'].'</td>
        <td class="column2">'.$c['new_cases'].'</td>
        <td class="column3">'.$c['new_deaths'].'</td>
        <td class="column4">'.$c['total_cases'].'</td>
        <td class="column5">'.$c['total_deaths'].'</td>
        <td class="column6">'.$c['total_deaths_per_million'].'</td>
    </tr>';
  }
?>
</tbody>
</table>
</div>
</div>

<footer>

</footer>

</body>
</html>
