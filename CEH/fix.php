<?php
function fix($string) {
	$return = preg_replace('/\//','dsd',$string);
	return $return;
}

$string = <<<EOT
<?php 

function fix(\$string) {
	\$return = preg_replace('/\//','dsd',\$string);
	return \$return;
}

?>
EOT;

echo highlight_string($string, true);
?>