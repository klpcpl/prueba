<?php

$array = Array(1,'\"22\"', 3, 4);

print_r($array);

echo "<br>";
echo "<br>";
echo "<br>";
echo stripslashes($array[1]);
echo stripslashes($array[0]);
echo stripslashes($array[2]);