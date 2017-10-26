<?php

// Pour que les champs vides soient considérés comme des réponses fausses :
/*
$r1 = isset($_GET["q1"]) ? $_GET['q1'] : false;
$r2 = isset($_GET["q1"]) ? $_GET['q1'] : false;
$r3 = isset($_GET["q1"]) ? $_GET['q1'] : false;
$r4 = isset($_GET["q1"]) ? $_GET['q1'] : false;
$r5 = isset($_GET["q1"]) ? $_GET['q1'] : false;
$r6 = isset($_GET["q1"]) ? $_GET['q1'] : false;
$r7 = isset($_GET["q1"]) ? $_GET['q1'] : false;
$r8 = isset($_GET["q1"]) ? $_GET['q1'] : false;
$r9 = isset($_GET["q1"]) ? $_GET['q1'] : false;
$r10 = isset($_GET["q1"]) ? $_GET['q1'] : false;
*/


// Compteur à zéro
$total =0;

// Vérification des réponses
$_GET["country"] == "q1rA" ? $total += 1 : $total = $total;
$_GET["city"] == "q2rB" ? $total += 1 : $total = $total;
$_GET["actress"] == "q3rC" ? $total += 1 : $total = $total;
$_GET["monster"] == "q4rB" ? $total += 1 : $total = $total;
$_GET["music"] == "q6rA" ? $total += 1 : $total = $total;
strtolower($_GET["waffles"]) == "eggo" ? $total += 1 : $total = $total;
$_GET["mother"] == "q8rB" ? $total += 1 : $total = $total;
$_GET["influence"] == "q9rC" ? $total += 1 : $total = $total;
$_GET["jonathan"] == "q10rA" ? $total += 1 : $total = $total;

// Vérification des réponses d
if (isset($_GET["nameB"]) && isset($_GET["nameD"]) && isset($_GET["nameE"]) && !isset($_GET["nameA"]) && !isset($_GET["nameC"]) && !isset($_GET["nameF"])){
    $total += 1;
  } else {
    $total = $total;
  };


echo "<p> Tu as " . $total . " bonnes réponses sur 10</p>";

if ($total < 3) {
  echo '<img src="./images/gif2.gif">';

} else if ( $total < 7) {
  echo '<img src="./images/gif1.gif">';

} else {
  echo '<img src="./images/gif3.gif">';

}
