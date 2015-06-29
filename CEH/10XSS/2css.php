<?php
$string = <<<EOT
<?php
	\$name=addslashes(\$_GET['name']);
	print '<table name="'.\$name.'"></table>';
?>
EOT;

if(!empty($_GET['name']))
{
	$name=addslashes($_GET['name']);
	print '<table name="'.$name.'"></table>';
} else {
	echo highlight_string($string, true);
}
?>
