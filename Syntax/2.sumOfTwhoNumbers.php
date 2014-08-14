<?php
    $firstNumber = 1234.5678;
    $secondNumber = 333;
    $sum =$firstNumber+$secondNumber;
    $sum = number_format((float)$sum, 2,'.', '');
    var_dump('$firstNumber + $secondNumber = '."$firstNumber + $secondNumber = $sum");
?>
