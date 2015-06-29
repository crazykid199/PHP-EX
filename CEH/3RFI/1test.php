<?php

$string = <<<EOT
<?php
\$test=\$_GET['test'];
include \$test;
?>
EOT;

if(empty($_GET['test']))
{
	echo highlight_string(($string), true);
} else {
	$test=$_GET['test'];
	include $test;
}
?>	