<?php

include_once 'CEuroKey.php';

class CEuroKeyWS {
	
	public $status = 0;
	public $data   = null;
	
	private $_keyGenerator;
	
	public function __construct($nn = CEuroKey::NN, $ns = CEuroKey::NS) {
		$this->data = new CEuroKey($nn,$ns);
		if ($this->data) {
			$this->status = 1;
		}
	}
	
	public function asJSON() {
		return json_encode($this);
	}
}

?>