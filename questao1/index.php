<?php

$resultado = "";
for ($i = 1; $i <= 100; $i++) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		$resultado .= "FizzBuzz<br>";
	} elseif ($i % 3 == 0) {
		$resultado .= "Fizz<br>";
	} elseif ($i % 5 == 0) {
		$resultado .= "Buzz<br>";
	}else{
		$resultado .= $i . "<br>";
	}
}
echo $resultado;