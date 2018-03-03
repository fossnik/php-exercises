<?php

function isIsogram($input)
{
	$input = strtolower($input);
	// replace non-letter
	preg_replace("[^a-z]", '', $input);

	$seen = "";
	foreach (str_split($input) as $letter)
		if (strpos($seen, $letter) !== false)
			return False;
		else
			$seen = $seen . $letter;

	return True;
}
