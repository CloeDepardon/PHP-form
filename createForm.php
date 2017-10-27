<?php

// OUVERTURE FORM
function openForm($action ="#") // si on ne passe pas d'argument dans l'index.php, ça prendra la valeur par défaut
{
  return "<form action='" . $action . "' >"; // on concatène action dans le formulaire
}

// OUVERTURE IMG
function createImg($class, $src, $alt, $width)
{
  return "<img class='". $class ."' src='". $src ."' alt='". $alt ."' width='". $width ."' >";
}

// OUVERTURE DIV
function createDiv($class)
{
  return "<div class='". $class ."'>";
}

//  OUVERTURE SECTION
function createSection($class)
{
  return "<section class='". $class ."'>";
}

// OUVERTURE H1
function createH1($class, $value)
{
  return "<h1 class='". $class ."' value='". $value ."' >";
}

// FERMETURE DE BALISES
function closeTag($tag)
{
  return "</" . $tag .">";
}

// INPUT AVEC LABEL
function createInput($class, $type, $name, $value ="", $label)
{
  return "<input class= '". $class ."'  type='". $type ."' name='". $name ."' value='". $value ."' > <label>$label</label>";
}

// MISE EN PLACE SELECT
function createSelect($name, $label, $options)
{
  $html = "<label>" . $label . "</label>";
  $html .= "<select name='" . $name . "'>";
  foreach ($options as $key => $value) {
    $html .= "<option value='". $value['value'] ."'>". $value['content'] ."</option>";
  }
  $html .= "</select>";
  return $html;
}

// GENERER SUBMIT
function createSubmit($class, $value)
{
  return "<input type='submit' class='". $class ."' value='". $value ."'>";
}


/* Un array multidimensionnel (qui contient plusieurs arrays)
$options = [
  [
    'value' => 'fr', // valeur pour le code
    'content' => 'Français', // valeur pour l'humain
  ],
  [
    'value' => 'en',
    'content' => 'Anglais',
  ],
  [
    'value' => 'de',
    'content' => 'Allemand',
  ],
]
*/
