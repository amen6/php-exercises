<?php
function greaterFn($num) {
  if ($num > 30) {
    return "$num is greater than 30 <br>";
  } elseif ($num > 20) {
    return "$num is greater than 20 <br>";
  } elseif ($num > 10) {
    return "$num is greater than 10 <br>";
  } else {
    return "$num is less than 10 <br>";
  }
}

echo greaterFn(40);
echo greaterFn(22);
echo greaterFn(11);
echo greaterFn(7);
?>