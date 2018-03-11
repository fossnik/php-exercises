<?php
/**
 * Created by PhpStorm.
 * User: seth
 * Date: 3/9/18
 * Time: 5:57 PM
 */

function sieve($input) {
	if ($input < 2)
		return [];

	$sieve = range(2, $input);
	$sieve = array_flip($sieve);

	foreach ($sieve as $k => $value) {
		$tis = $k;
		while ($tis <= $input) {
			$tis += $k;
			unset($sieve[$tis]);
		}
	}

	$remit = array_flip($sieve);
	return array_values($remit);
}