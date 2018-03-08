<?php

function encode($input) {
	if (strlen($input) === 0)
		return '';

	$output = '';
	$first = '';
	$count = 1;

	foreach (str_split($input) as $next)
		if ($first === $next)
			$count++;
		else {
			$output .= $count > 1 ? $count . $first : $first;
			$count = 1;
			$first = $next;
		}

	$output .= $count > 1 ? $count . $first : $first;

	return $output;
}

function decode($input) {

}
