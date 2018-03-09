<?php
/**
 * Created by PhpStorm.
 * User: seth
 * Date: 3/8/18
 * Time: 11:24 PM
 * @param $input
 * @return string
 */


function encode($input) {
	$remit = '';
	$input = preg_replace("/[^a-zA-Z0-9]/", '', $input);

	foreach (str_split($input) as $index => $char) {
		if ($index != 0 && $index % 5 == 0)
			$remit .= ' ';

		if (ctype_alpha($char)) {
			$zeroIndex = ord(strtolower($char)) - ord('a');
			$remit .= chr(ord('z') - $zeroIndex);
		} else if (ctype_digit($char))
		    $remit .= $char;
	}

	return $remit;
}
