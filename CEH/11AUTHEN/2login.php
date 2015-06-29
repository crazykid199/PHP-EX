<?php
if(!empty($login_ok)) {
	if ($login_ok)
	 {
	 $_SESSION['loggato'] = true;
	 echo "<p>\$txt_pass_ok</p>";
	 echo"<div align='center'><a href='index.php'>\$txt_view_entry</a> | 
	 <a href='admin.php'>\$txt_delete-\$txt_edit</a> | <a href='install.php'>\$txt_install</a></div>";
	 }
} else {
$string = <<<EOT
<?php
	if (\$login_ok)
	 {
	 \$_SESSION['loggato'] = true;
	 echo "<p>\$txt_pass_ok</p>";
	 echo"<div align='center'><a href='index.php'>\$txt_view_entry</a> | 
	 <a href='admin.php'>\$txt_delete-\$txt_edit</a> | <a href='install.php'>\$txt_install</a></div>";
	 }
?>
EOT;
echo highlight_string($string, true);
}
?>
