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
			if (product(substr($digits, $i, $width)) > $high)
				$high = product(substr($digits, $i, $width));

		return $high;
	}

	private function product($subDigits) {
		$product = 1;
		foreach ($subDigits as $value)
			$product *= (int)$value;
	}

}
