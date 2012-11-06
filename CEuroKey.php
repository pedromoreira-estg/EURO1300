<?php
 
include 'CExtractor.php';
class CEuroKey {
	
	const NN = 5;
	const NS = 2;
	const MINN = 1;
	const MAXN = 50;
	const MINS = 1;
	const MAXS = 11;
	
	
	public $numbers;
	public $stars;
	
	private $_nn;
	private $_ns;
	private $_minn;
	private $_maxn;
	private $_mins;
	private $_maxs;
	
	private $_ngen;
	private $_sgen;
	
	public function __construct(
		$nn = CEuroKey::NN,
		$ns = CEuroKey::NS,
		$minn = CEuroKey::MINN,
		$maxn = CEuroKey::MAXN,
		$mins = CEuroKey::MINS,
		$maxs = CEuroKey::MAXS
		) {
			$this->_nn   = $nn;
			$this->_ns   = $ns;
			$this->_maxn = $maxn;
			$this->_minn = $minn;
			$this->_mins = $mins;
			$this->_maxs = $maxs;
			
			$this->generateKey();
		}
		
		public function generateKey() {
			$this->_ngen = new CExtractor($this->_nn, $this->_minn, $this->_maxn);
			$this->_sgen = new CExtractor($this->_ns, $this->_mins, $this->_maxs);
			
			$this->numbers = $this->_ngen->extract();
			$this->stars   = $this->_sgen->extract();
		}
		
		
}
 
?>