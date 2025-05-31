<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$length = 2;
$width = 4;
$area = calculateArea($length, $width);

echo "<p>The area of a rectangle with length $length and width $width is $area</p>";
?>
