<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["Chicken","Panner","Pizza","Sushi"];
/*
Print every array element in a new line.
*/

echo "{$food[0]} <br>";
echo "{$food[1]} <br>";
echo "{$food[2]} <br>";
echo "{$food[3]} <br>";

echo "<pre>";
print_r($food);
echo "</pre>";

$i = 0;
while ($i <sizeof($food)){
    echo "{$food[$i]} <br>";
    $i++;
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>$food[0]</li>";
echo "<li>$food[1]</li>";
echo "<li>$food[2]</li>";
echo "<li>$food[3]</li>";
echo "</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_association = [
    'Chicken' => 'main course',
    'Panner' => 'desert',
    'Pizza' => 'main course',
    'Sushi' => 'side course',
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo 'Chicken | '. $food_association['Chicken'].'<br>';
echo 'Panner | '. $food_association['Panner'].'<br>';
echo 'Pizza | '. $food_association['Chicken'].'<br>';
echo 'Sushi | '. $food_association['Chicken'].'<br>';

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_association = [
    'Chicken' => [
        'type' => 'main course',
        'origin' => 'USA'
    ],
    'Panner' => [
        'type' => 'desert',
        'origin' => 'India'
    ],
    'Pizza' => [
        'type' => 'main course',
        'origin' => 'Mexico'
    ],
    'Sushi' => [
        'type' => 'side course',
        'origin' => 'Japan'
    ],
];

echo 'Chicken | '. $food_association['Chicken']['type'].' | '.$food_association['Chicken']['origin'] .'<br>';    
echo 'Chicken | '. $food_association['Panner']['type'].' | '.$food_association['Panner']['origin'] .'<br>';
echo 'Chicken | '. $food_association['Pizza']['type'].' | '.$food_association['Pizza']['origin'] .'<br>';
echo 'Chicken | '. $food_association['Sushi']['type'].' | '.$food_association['Sushi']['origin'] .'<br>';

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <table>
      <tr>
        <th>Food</th>
        <th>Type</th>
        <th>Origin</th>
      </tr>
      <tr>
        <td><?php echo key($food_association)?></td>
        <td><?php echo $food_association['Chicken']['type']?></td>
        <td><?php echo $food_association['Chicken']['origin']?></td>
        <?php next($food_association)?>
      </tr>
      <tr>
        <td><?php echo key($food_association)?></td>
        <td><?php echo $food_association['Panner']['type']?></td>
        <td><?php echo $food_association['Panner']['origin']?></td>
        <?php next($food_association)?>
      </tr>
      <tr>
        <td><?php echo key($food_association)?></td>
        <td><?php echo $food_association['Pizza']['type']?></td>
        <td><?php echo $food_association['Pizza']['origin']?></td>
        <?php next($food_association)?>
      </tr>
      <tr>
        <td><?php echo key($food_association)?></td>
        <td><?php echo $food_association['Sushi']['type']?></td>
        <td><?php echo $food_association['Sushi']['origin']?></td>
        <?php next($food_association)?>
      </tr>
    </table>
</body>
</html>
