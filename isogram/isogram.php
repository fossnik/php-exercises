<?php

function isIsogram($input)
{
	$input = strtolower($input);

	// remove whitespace, excepting diacritics
	$input = preg_replace("/[^\wé]+/", '', $input);

	$seen = "";
	foreach (str_split($input) as $letter)
		if (strpos($seen, $letter) !== false)
			return False;
		else
			$seen = $seen . $letter;

	return True;
}
