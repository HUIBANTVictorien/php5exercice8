<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 8 partie 3 php</title>
  </head>
  <body>
    <?php
    $number1 = 42;
    $number2 = 69;
    $number3 = 12;
    function calculate($number1, $number2, $number3) {
      return $number1 + $number2 + $number3;
    }
    echo calculate($number1, $number2, $number3);
     ?>
  </body>
</html>
