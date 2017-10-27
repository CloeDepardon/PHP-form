<?php
require_once('./createForm.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Quizz Stranger Things </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <?php
  echo openForm("./script.php");

  echo createDiv("banner container-fluid");
  echo closeTag("div");
  echo "<h1> Connais-tu bien Stranger Things ? </h1>";

  echo createDiv("row");
    echo createDiv("col-lg-6");
      echo createImg("center", "./images/question1.jpg", "Stranger Things","50%");
      echo "<h5> 1. Stranger Things est une série : </h5>";
      echo createInput("option-input", "radio", "country", "q1rA", "Américaine");
      echo createInput("option-input", "radio", "country", "q1rB", "Anglaise");
      echo createInput("option-input", "radio", "country", "q1rC", "Française");
    echo closeTag("div");

      echo createDiv("col-lg-6");
        echo createImg("center", "./images/question2.png", "Stranger Things","50%");
        echo "<h5> 2. Dans quelle ville de l'Indiana se déroule l'histoire ?  </h5>";
        echo createInput("option-input", "radio", "city", "q2rA", "Fishers");
        echo createInput("option-input", "radio", "city", "q2rB", "Hawkins");
        echo createInput("option-input", "radio", "city", "q2rC", "Anderson");
      echo closeTag("div");
  echo closeTag("div");

  echo createDiv("row");
    echo createDiv("col-lg-6");
        echo createImg("center", "./images/question3.jpeg", "Stranger Things","50%");
        echo "<h5> 3. Quelle jeune actrice incarne le personnage d'Eleven ? </h5>";
        echo createInput("option-input", "radio", "actress", "q3rA", "Maisie Williams");
        echo createInput("option-input", "radio", "actress", "q3rB", "Natalia Dyer");
        echo createInput("option-input", "radio", "actress", "q3rC", "Millie Bobby Brown");
    echo closeTag("div");

  echo createDiv("col-lg-6");
    echo createImg("center", "./images/question4.jpg", "Stranger Things","50%");
      echo "<h5> 4. Comment les enfants surnomment-ils le monstre du monde à l'envers ? </h5>";
      echo createInput("option-input", "radio", "monster", "q4rA", "Thessalhydra");
      echo createInput("option-input", "radio", "monster", "q4rB", "Demogorgon");
      echo createInput("option-input", "radio", "monster", "q4rC", "Troglodyte");
    echo closeTag("div");
  echo closeTag("div");


  echo createDiv("row");
    echo createDiv("col-lg-6");
      echo createImg("center", "./images/question5.jpg", "Stranger Things","50%");
      echo "<h5> 5. Quels sont les prénoms des 3 amis de Will ? </h5>";
      echo createInput("option-input", "checkbox", "friend", "nameA", "Jack");
      echo createInput("option-input", "checkbox", "friend", "nameB", "Mike");
      echo createInput("option-input", "checkbox", "friend", "nameC", "Tom");
      echo createInput("option-input", "checkbox", "friend", "nameD", "Dustin");
      echo createInput("option-input", "checkbox", "friend", "nameE", "Lucas");
      echo createInput("option-input", "checkbox", "friend", "nameF", "Steve");
      echo "<br>";
    echo closeTag("div");

    echo createDiv("col-lg-6");
      echo createImg("center", "./images/question6.jpg", "Stranger Things","50%");
      echo "<h5> 6. Quelle musique culte des 80's Jonathan fait-il découvrir à son petit frère Will dans un flashback de lépisode 2 ? </h5>";
      echo createInput("option-input", "radio", "music", "q6rA", "Should I stay or should I go");
      echo createInput("option-input", "radio", "music", "q6rB", "She has funny cars");
      echo createInput("option-input", "radio", "music", "q6rC", "I melt with you");
      echo "<br>";
    echo closeTag("div");
  echo closeTag("div");

  echo createDiv("row");
    echo createDiv("col-lg-6");
      echo createImg("center", "./images/question7.jpg", "Stranger Things","50%");
      echo "<h5> 7. Quelle est la marque des gauffres préférées d'Eleven ?  </h5>";
      echo createInput("", "text", "waffles", "", "");
      echo "<br>";
    echo closeTag("div");

    echo createDiv("col-lg-6");
      echo createImg("center", "./images/question8.jpg", "Stranger Things","50%");
      echo "<h5> 8. Quel est le prénom de la mère de Will ?  </h5>";
      echo createInput("option-input", "radio", "mother", "q8rA", "Charlie");
      echo createInput("option-input", "radio", "mother", "q8rB", "Joyce");
      echo createInput("option-input", "radio", "mother", "q8rC", "Jane");
      echo "<br>";
    echo closeTag("div");
  echo closeTag("div");


  echo createDiv("row");
    echo createDiv("col-lg-6");
      echo createImg("center", "./images/question9.jpg", "Stranger Things","50%");
      echo "<h5> 9.  Les principales influences des créateurs de la séries viennent de : </h5>";
      echo createInput("option-input", "radio", "influence", "q9rA", "Tim Burton et Edgar Allan Poe");
      echo createInput("option-input", "radio", "influence", "q9rB", "Pedro Almodovar");
      echo createInput("option-input", "radio", "influence", "q9rC", "Stephen King et Steven Spielberg");
      echo "<br>";
    echo closeTag("div");

    echo createDiv("col-lg-6");
      echo createImg("center", "./images/question10.png", "Stranger Things","50%");
      echo "<h5> 10. De quoi est passionné Jonathan, le frère de Will ? </h5>";
      echo createInput("option-input", "radio", "jonathan", "q10rA", "de photographie");
      echo createInput("option-input", "radio", "jonathan", "q10rB", "de cinéma");
      echo createInput("option-input", "radio", "jonathan", "q10rC", "de danse");
      echo "<br>";
    echo closeTag("div");
  echo closeTag("div");

  echo "<br>";

  echo createDiv("row col-lg-12");
    echo createSubmit("button", "Envoyer");
  echo closeTag("div");
  echo closeTag("form");
  ?>
</body>

</html>
