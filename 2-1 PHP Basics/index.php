<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Basics</title>
  <style>
    .color-green {
      background-color: green;
      border: 1px solid;
    }

    .color-red {
      background-color: red;
      border: 1px solid;
    }
  </style>
</head>
<body>
  <?php
    echo "<h3>Hello World!</h3>";

    $myArray = ['apples', 'oranges', 'grapes'];
    echo "<h1>for Loop Example:</h1>";
    for($i = 0; $i < count($myArray); $i++){
      echo "<p>$myArray[$i]</p>";
    }

    $x = 0;
    while($x < 10) {
      echo "x is $x<br>";
      $x++;
    }

    echo "<h1>foreach Loop Example:</h1>";
    foreach($myArray as $value) {
  ?>
    <p>
      <?php echo $value; ?>
    </p>
  <?php
    }
  ?>
</body>
</html>