<?php

function append_lastname(&$name) {
  $name .= " Barcasnegras";
}

function say_hi($name) {
  echo "Hi, Mr. $name";
}

function multiply(...$numbers) {
  $multiplier = 1;

  foreach ($numbers as $number) {
    $multiplier *= $number;
  }

  return $multiplier;
}

echo "<h1>Functions in PHP</h1>";

$name = "Erick";
append_lastname($name);
say_hi($name);

$total = multiply(...[2, 5, 8, 16, 3, 20]);
echo "<br>Total: $total";