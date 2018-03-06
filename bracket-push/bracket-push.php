<?php

function brackets_match($input) {
	if (strlen(preg_replace('/\[/', '', $input)) !== strlen(preg_replace('/\]/', '', $input)) ||
			strlen(preg_replace('/\(/', '', $input)) !== strlen(preg_replace('/\)/', '', $input)) ||
			strlen(preg_replace('/\{/', '', $input)) !== strlen(preg_replace('/\}/', '', $input)))
		return false;

	if (strlen($input) === 0)
		return true;

	$stack = [];

	$justBrackets = preg_replace('/[^(){}[\]]/', '', $input);

	foreach (str_split($justBrackets) as $char) {
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
