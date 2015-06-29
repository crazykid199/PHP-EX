<?php
$string = <<<EOT
<?php
	\$file = \$_SERVER["DOCUMENT_ROOT"]. \$_REQUEST['file'];
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

	header("Content-Type: application/force-download");
	header( "Content-Disposition: attachment; filename=".basename(\$file));

	//header( "Content-Description: File Transfer");
	@readfile(\$file);
	die();
?>
EOT;

if(empty($_REQUEST['file'])) {
	echo highlight_string($string, true);
} else {
$file = $_SERVER["DOCUMENT_ROOT"]. $_REQUEST['file'];
	  header("Pragma: public");
	  header("Expires: 0");
	  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

	  header("Content-Type: application/force-download");
	  header( "Content-Disposition: attachment; filename=".basename($file));

	  //header( "Content-Description: File Transfer");
	  @readfile($file);
	  die();
}
?>
