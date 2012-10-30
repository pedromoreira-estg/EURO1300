<?php

// class for generic extraction
class CExtractor {
	
	// properties
	private $_n;
	private $_min;
	private $_max;
	
	private $_set = array();
	private $_ext = array();
	
	// methods
	
	// constructor
	function __construct($n,$min,$max){
		$this->_n = $n;
		if ($min > $max) {
			$this->_min = $max;
			$this->_max = $min;
		} else {
			$this->_max = $max;
			$this->_min = $min;
		}
	}
	
	public function extract() {
		$this->init_set();		// fulfilled array {min;....;max}
		$this->init_ext();		// {}
		for ($i=0; $i < $this->_n ; $i++) {
			$ridx = rand(0,count($this->_set)-1);
			$this->_ext[] = $this->_set[$ridx];
			array_splice($this->_set,$ridx,1);
		}
		sort($this->_ext);
		return $this->_ext;
	}
	
	// fills the 'set' array with all numbers between
	// min and max
	private function init_set() {
		$this->_set = array();
		for($i=0; $i < $this->_max-$this->_min + 1; $i++) {
			$this->_set[$i] = $this->_min + $i;
		}
	}
	
	private function init_ext() {
		$this->_ext = array();
	}
	
}

?>