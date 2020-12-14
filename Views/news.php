<?php
  require "begin.php";
  require "../Models/database.php";
  require "../Controllers/users.php";

  $news = new News();

  foreach ($news->get() as $n) {
    echo '
      <main id="newsblock">
        <article class="articlepart">
          <img src="'.$n['img'].'" alt="Pic">
          <a href="'.$n['url'].'">'.$n['cim'].'</a>
        </article>
      </main>';}

?>
