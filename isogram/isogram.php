<?php

function isIsogram($input)
{
	$input = strtolower($input);

	// remove whitespace, excepting diacritics
	$input = preg_replace("/[^\wé]+/", '', $input);

	$allUniqueChars = count_chars($input, 3);

	return strlen($allUniqueChars) === strlen($input);
}
