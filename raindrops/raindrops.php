<?php

function raindrops($input)
{
	if ($input === 1)
		return '1';

	$output = '';
	if ($input % 3 === 0)
	 	$output = $output . 'Pling';
	if ($input % 5 === 0)
		$output = $output . 'Plang';
	if ($input % 7 === 0)
		$output = $output . 'Plong';

	return $output !== '' ? $output : (string)$input;
}
