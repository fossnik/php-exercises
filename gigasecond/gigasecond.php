<?php

function from($input) {
	$birth = clone $input;
	$birth->add(new DateInterval('PT1000000000S'));
	return $birth;
}
