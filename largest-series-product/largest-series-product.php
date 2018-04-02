<?php

class Series {

	private $digits;

	public function __construct($digits) {
		if (preg_match("/\D/", $digits))
			throw new InvalidArgumentException('Input must contain only Digits');

		$this->digits = $digits;
	}

	public function largestProduct($width) {
		if ($width === 0)
			return 1;

		$digits = $this->digits;
		if ($width < 1 || $width > strlen($digits))
			throw new InvalidArgumentException('Span cannot be Negative');

		$high = 0;
		for ($i = 0; $i <= strlen($digits) - $width; $i++) {
			$subSequence = substr($digits, $i, $width);
			$product = Series::sequenceProduct($subSequence); 
			if ($product > $high)
				$high = $product;
		}

		return $high;
	}
	
	private function sequenceProduct($subSequence) {
		$product = 1;

		foreach (str_split($subSequence) as $value)
			$product *= (int)$value;
		
		return $product;
	}

}
