<?php

function sumOfSquares($input) {
	$sum = 0;
	foreach (range(1,$input) as $n)
		$sum += $n * $n;

	return $sum;
}

function squareOfSums($input) {
	$sum = 0;
	foreach (range(1,$input) as $n)
		$sum += $n;

	return $sum * $sum;
}

function difference($input) {
	return squareOfSums($input) - sumOfSquares($input);
}
