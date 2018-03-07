<?php

class Series {

	private $digits;

	public function __construct($digits) {
		$this->digits = $digits;
	}

	public function largestProduct($width) {
		$digits = $this->digits;
		$high = 0;
		for ($i = 0; $i <= strlen($digits) - $width; $i++) {
			$product = 1;
			foreach (str_split(substr($digits, $i, $width)) as $value)
				$product *= (int)$value;

			if ($product > $high)
				$high = $product;
		}

		return $high;
	}

}
