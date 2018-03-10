<?php
/**
 * Created by PhpStorm.
 * User: seth
 * Date: 3/9/18
 * Time: 5:57 PM
 */

function sieve($input) {
	$notPrime = [];

	foreach (range(3, $input) as $j) {
		$k = $j;
		while ($k < $j) {
			$notPrime[$k] = true;
			$k += $j;
		}
	}

	$remit = [];
	foreach (range(2, $input) as $l)
		if ($notPrime[$l] == false)
			array_push($remit, $l);

	unset($remit[1]);
	return $remit;
}