<?php

include_once 'CExtractor.php';

$ne = new CExtractor(5,1,50);
$ns = new CExtractor(2,1,11);

$numbers = $ne->extract();
$stars   = $ns->extract();

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
		<?php echo keyAsXML($numbers,$stars); ?>
	</body>
</html>