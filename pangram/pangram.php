<?php

function isPangram($input)
{
	$input = strtolower($input);
	$alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

	foreach ($alphabet as $letter)
		if (strpos($input, $letter) === false)
			return False;

	return True;
}
