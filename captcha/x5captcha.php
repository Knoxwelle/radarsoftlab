<?php
include("../res/x5engine.php");
$nameList = array("672","rap","rsv","huc","dsp","3w7","e75","sda","afz","dp3");
$charList = array("7","M","T","7","6","5","V","Y","S","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
