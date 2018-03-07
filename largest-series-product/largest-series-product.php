<?php

class Series {

	private $digits;

	public function __construct($digits) {
		$this->digits = $digits;
	}

	public function largestProduct($width) {
		$digits = $this->digits;
		$high = 0;
		for ($i = 0; $i < strlen($digits) - $width; $i++)
			if ($digits[$i] * $digits[$i+1] * $digits[$i+2] > $high)
				$high = $digits[$i] * $digits[$i+1] * $digits[$i+2];

		return $high;
	}
}
