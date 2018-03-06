<?php

function brackets_match($input) {
	$input = "([{}({}[])])";
	$stack = [];

	foreach (str_split($input) as $char) {
		if (preg_match('/[[({]/', $char))
			array_push($stack, $char);
		else if (count($stack) === 0)
			return false;
		else if (($char === '}' && end($stack) === '{') ||
		         ($char === ']' && end($stack) === '[') ||
		         ($char === ')' && end($stack) === '('))
			array_pop($stack);
	}
	return count($stack) === 0;
}
