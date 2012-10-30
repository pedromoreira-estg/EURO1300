<?php
$numbers = array(2,3,11,16,44);

$stars = array();
$stars[] = 1;
$stars[] = 3;

// $stars = array(1,3);

// $stars[0] = 1; $stars[1] = 3;

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


?>
<html>
	<head>
		<title> Euro Millions - Key Generator </title>
		<link rel="stylesheet" href="css/euro.css">
	</head>
	<body>
		<h1>Bet for Millions</h1>
		<?php echo keyAsHTML($numbers,$stars); ?>
	</body>
</html>