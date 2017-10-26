<?php

$total =0;

$_GET["country"] == "q1rA" ? $total += 1 : $total = $total;
$_GET["city"] == "q2rB" ? $total += 1 : $total = $total;
$_GET["actress"] == "q3rC" ? $total += 1 : $total = $total;
$_GET["monster"] == "q4rB" ? $total += 1 : $total = $total;
$_GET["music"] == "q6rA" ? $total += 1 : $total = $total;

if (isset($_GET["nameB"]) && isset($_GET["nameD"]) && isset($_GET["nameE"]) && !isset($_GET["nameA"]) && !isset($_GET["nameC"]) && !isset($_GET["nameF"])){
    $total += 1;
  } else {
    $total = $total;
  };

strtolower($_GET["waffles"]) == "eggo" ? $total += 1 : $total = $total;
$_GET["mother"] == "q8rB" ? $total += 1 : $total = $total;
$_GET["influence"] == "q9rC" ? $total += 1 : $total = $total;
$_GET["jonathan"] == "q10rA" ? $total += 1 : $total = $total;


echo "<p> Tu as " . $total . " bonnes réponses sur 10</p>";

if ($total < 3) {
  echo '<img src="./images/gif2.gif">';

} else if ( $total < 7) {
  echo '<img src="./images/gif1.gif">';

} else {
  echo '<img src="./images/gif3.gif">';

}
