<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

$food = array("Pizza", "Sandwiches", "Burgers", "Fries");
echo "I like " . $food[0] . ", " . $food[1] . ", " . $food[2] . ", and " . $food[3] . ".";
$food[1] = "Soda";
echo "I like " . $food[0] . ", " . $food[1] . ", " . $food[2] . ", and " . $food[3] . ".";

for($i = 0; $i < count($food); $i++) {
  echo $food[$i];
  echo "<br>";
}

$tastes = array("Pete"=>"Candy", "Jose"=>"Chocolate", "Joe"=>"Chips");
echo "Pete likes to eat " . $tastes['Pete'] . ".";
?>

</body>
</html>
