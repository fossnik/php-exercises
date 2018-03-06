<?php

function toRna($input) {
	$trans = [
		'G' => 'C',
		'C' => 'G',
		'T' => 'A',
		'A' => 'U'
	];

	$remit = '';
	foreach (str_split($input) as $char)
		$remit = $remit . $trans[$char];

	return $remit;
}
