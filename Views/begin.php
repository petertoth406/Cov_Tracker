<!DOCTYPE html>
<html lang="hu">

<head>
  <title>Coronavirus Tracker</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <header id="headhero">
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav_button">
                <a class="navlink" href="index.php">Főoldal</a>
            </li>
            <li class="nav_button" id="nav_button_r">
                <a class="navlink" href="timeline.php">Időrend</a>
            </li>
            <li class="nav_button" id="nav_button_r">
                <a class="navlink" href="news.php">Hírek</a>
            </li>
        </ul>
        <form method="post" action="timeline.php" class="form-inline">
            <input class="form-control mr-sm-1 rounded" type="text" name="szures" placeholder="2020-11-13" aria-label="Search">
            <button id="search_button" type="submit" name="search" value="Keres"><img src="button.png"></button>
        </form>
        </div>
    </nav>
    <div id="headpic">
    <h1>Magyarországi Koronavírus Tájékoztató</h1>
    </div>
  </header>
