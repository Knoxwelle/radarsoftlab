<?php
include("../res/x5engine.php");
$nameList = array("jls","4hc","g24","vuc","wxz","un8","3ld","he6","fzn","276");
$charList = array("U","M","D","D","Z","L","8","Y","E","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
