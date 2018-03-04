<?php

function isPangram($input)
{
	$input = strtolower($input);
	$input = preg_replace("/[^a-z]+/", '', $input);

	return count_chars($input, 3) === 'abcdefghijklmnopqrstuvwxyz';
}
