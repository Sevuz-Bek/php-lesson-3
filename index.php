<?php 

// 1. С помощью цикла while выведите все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

$a = 0;
while ($a <= 100) {
  if ($a % 3 == 0) {
    echo $a . ' ';
  }
  $a++;
}