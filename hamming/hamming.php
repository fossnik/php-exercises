<?php

function distance($a, $b)
{
	if (strlen($a) !== strlen($b))
		throw new InvalidArgumentException('DNA strands must be of equal length.');

	$distance = 0;
	foreach (str_split($a) as $index => $value)
		if ($value !== $b[$index])
			$distance++;

	return $distance;
}
