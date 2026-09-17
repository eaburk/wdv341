<?php
  require("includes/functions.php");

  function stringHandlerFunction($str) {
    echo "The number of characters in the string is " . strlen($str) . "<br>";

    echo "The trimmed string is: " . trim($str) . "<br>";

    echo "The lowercase string is: " . strtolower($str) . "<br>";

    if(str_contains(strtolower($str), "dmacc")) {
      echo "The string contains dmacc<br>";
    } else {
      echo "The string does NOT contain dmacc<br>";
    }
  }
?>

  <?php
    $page_title = "PHP Functions Practice";
    include_once("includes/header.php");

    echo greetUser("Eric") . "<br>";
    echo greetUser("Jamie") . "<br>";
    echo greetUser("Kelly") . "<br>";
    $x = 3;
    $y = 5;
    $total = addNumbers($x, $y);
    echo "The result of $x + $y is: " . $total;

    echo "<br>";

    stringHandlerFunction("dmacc");

    $phoneNumber = "0123456789";
    echo substr($phoneNumber, 0, 3) . "-" . substr($phoneNumber, 3, 3);

    echo "<br>";

    echo "The current date is: " . date("m/d/Y", strtotime("last day of 2026-09"));
    echo "<br>";

    $currentDate = new DateTimeImmutable();
    echo "The current date using DateTimeImmutable class is: " .
        $currentDate->format("Y-m-d H:i:s") . "<br>";
  ?>

</body>
</html>