<?php
include_once 'CEuroKeyWS.php';

$ws = new CEuroKeyWS();
echo ($ws->asJSON());

?>