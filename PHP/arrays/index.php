<?php

echo "<h1> Arrays in PHP </h1> <br>";

$names = array('Ivan', 'Stephen', 'Chris');
$animals = ['Lion', 'Tiger', 'Dog', 'Bird'];
$ages = array($names[0]=>25, $names[1]=>37, $names[2]=>36);

echo "------------------------------------ <br>";

foreach ($ages as $key => $value) {
  echo "$key: $value <br>";
}

echo "------------------------------------ <br>";

for ($i=0; $i < count($animals); $i++) { 
  if ($i == count($animals) - 1) {
    echo "$animals[$i].";
  } else {
    echo "$animals[$i], ";
  }
}

echo "<br>------------------------------------ <br>";

echo $names[1]. "<br>";
echo $ages["Ivan"]. "<br>";

echo "------------------------------------ <br>";

echo "Size (animals): ". count($animals). "<br>";
echo "Slice (animals): ". array_slice($animals, 1, 3). "<br>";