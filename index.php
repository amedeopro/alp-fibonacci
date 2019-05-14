<?php

function Fibonacci($numero){
  if ($numero == 0) {
    return 0;
  } else if ($numero == 1) {
    return 1;
  } else {
    return (Fibonacci($numero - 1) + Fibonacci($numero - 2));
  }
}

$numero = 1000;
for ($i=0; $i < $numero ; $i++) {
  echo Fibonacci($i),'<br>';
}

?>
