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