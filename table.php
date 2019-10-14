<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>FindMyMovie!</title>
  <link rel="stylesheet" type="text/css" href="styles/tablestyle.css" />
</head>
<body>
  <ul class="nav">
        <li align="center">
      <img src="images/icon.png" width="60" height="60" class="img3" /><a class="a_nav" href="/moviesFinder/frontscreen.php">Find My Movie</a>
    </li>
  </ul><br />
<?php
echo '<div align="center">';
echo '<p>Here is what I found about this movie...</p>';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$li = $_POST['inpt_search'];
// echo $li;

$sql = "select * from movies where name like '%" . $li . "%'";
// echo $sql;

$servername = "localhost";
$username   = "root";
$password   = "Lordvile123#";

$conn = mysqli_connect("$servername", "$username", "$password", "mydb") or die('Error connecting to MySQL server.');
$result = $conn->query($sql);

if(empty($_POST["csv"])){

echo '<table>';
echo '<tr><td>NAME</td><td>Director</td><td>Stars</td><td>Year</td><td>IMDB</td></tr>';


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>" . "<td>" . $row["director"] . "</td>" . "<td>" . $row["stars"] . "</td>" . "<td>" . $row["year"] . "</td>" . "<td>" . $row["imdb"] . "</td>";
        echo "</tr>";

    }
} else {
    echo "Sorry, try another search";
}

$result->free();
echo "</table>";
echo '</div>';
// $conn->close();
}

}else{

echo '<table>';
echo '<tr><td>NAME</td><td>Director</td><td>Stars</td><td>Year</td><td>IMDB</td></tr>';

$fp = fopen('output.csv', 'w+');
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      fputcsv($fp, $row);
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>" . "<td>" . $row["director"] . "</td>" . "<td>" . $row["stars"] . "</td>" . "<td>" . $row["year"] . "</td>" . "<td>" . $row["imdb"] . "</td>";
        echo "</tr>";

    }
} else {
    echo "Sorry, try another search";
}

$result->free();
echo "</table>";
echo '</div>';
fclose($fp);
echo "<p>DONE!! Check for a file called output.csv </p>";

}
?>

</body>
</html>
