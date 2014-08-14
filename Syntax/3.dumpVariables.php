<?php
    $variable = "Hello";
    if (is_numeric($variable)) {
    var_dump($variable);
}   else{
    echo gettype($variable);
}
?>
