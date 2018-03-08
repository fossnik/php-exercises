<?php

class Robot {
	private $name;
	private static $robotNames = [];

	public function __construct() {
		$this->generateName();
	}

	private function generateName() {
		do $name = chr(rand(65, 90)) . chr(rand(65, 90)) . rand(0,9) .
			rand(0,9) . rand(0,9);
		while (in_array($name, self::$robotNames));

		$this->name = $name;
		self::$robotNames[] = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function reset() {
		unset($this->name);
		$this->generateName();
	}
}
