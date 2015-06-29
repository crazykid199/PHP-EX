<?php

$string = <<<EOT

<?php
	\$test=\$_GET['test'];
	readfile(\$test);
?>

EOT;
if(empty($_GET['test']))
{
	echo highlight_string($string, true);
} else {
	$test=$_GET['test'];
	readfile($test);
}


	    
?>
