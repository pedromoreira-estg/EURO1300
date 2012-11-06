<?php

include_once 'CEuroKey.php';


function keyAsHTML($n,$s) {
	$html = "";
	$html .= "\n<div class=\"key\">";
	$html .= "\n\t<ul class=\"numbers\">";
	foreach($n as $number) {
		$html .= "\n\t\t<li>$number</li>";
	}
	$html .= "\n\t</ul>";
	$html .= "<ul class=\"stars\">";
	foreach($s as $star) {
		$html .= "\n\t\t<li>$star</li>";
	}	
	$html .= "\n\t</ul>";
	$html .= "\n</div>";
	return $html;
}

// SimpleXML API
function keyAsXML($narray,$sarray) {
	
	$xml = new SimpleXMLElement("<div></div>");
	$xml->addAttribute("class","key");
	
	$listn = $xml->addChild("ul");
	$lists = $xml->addChild("ul");
	
	$listn->addAttribute("class","numbers");
	$lists->addAttribute("class","stars");
	
	foreach($narray as $number) {
		$listn->addChild("li",$number);
	}
	foreach($sarray as $star) {
		$lists->addChild("li",$star);
	}
	
	
	echo $xml->asXML();
}

?>
<html>
	<head>
		<title> Euro Millions - Key Generator </title>
		<link rel="stylesheet" href="css/euro.css">
	</head>
	<body>
		<h1>Bet for Millions</h1>
		<?php 
		$kg = new CEuroKey();
		
		for($i=0; $i < 3; $i++) {
			echo keyAsXML($kg->numbers,$kg->stars); 
			$kg->generateKey();
		}
		?>
	</body>
</html>