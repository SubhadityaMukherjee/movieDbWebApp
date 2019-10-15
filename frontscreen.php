<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>FindMyMovie! </title>
  <link rel="stylesheet" type="text/css" href="styles/style.css" />

</head>
<body>
  <!-- navbar -->

  <ul class="nav">
    <li align="center">
      <img class="image" src="images/icon.png" width="60" height="60" /><a class="a_nav" href="/moviesFinder/frontscreen.php">Find My Movie</a>
      <li><a class="a_nav" href="/moviesFinder/fun.php">Click me for some Fun!</a></li>
    </li>

    </ul><br />

  <form align="center" action = "table.php" method="POST">


    <img src="images/spot.png" width="30%" height="30%">
    <!-- Search bar -->
    <p>Hover to search</p>
    <div class="cntr-innr">
      <label class="search" for="inpt_search"><input name="inpt_search" id="inpt_search" type="text"/></label>
    </div><input class="ripple" type="submit" name="sub" href="/movie"/><br><br>
    <label class="container"><p2>Export to CSV?</p2>
  <input type="checkbox" id="cbx" name="csv" class="label__checkbox" value="Export to csv">
  <span class="checkmark"></span>
</label>
  </form>

</body>
</html>
