<?php
if(!empty($logged)) {
	if ($logged == true) {
		echo 'Logged in.'; 
	} else {
		print 'Not logged in.';
	}
} else {
$string = <<<EOT
<?php
	if (\$logged == true) {
		echo 'Logged in.'; 
	} else {
		print 'Not logged in.';
	}
?>
EOT;
echo highlight_string($string, true);
}
?>
