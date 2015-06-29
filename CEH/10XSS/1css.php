<?php
$string = <<<EOT
<?php		
	\$name=\$_GET['name'];
	print \$name; 
?>
EOT;

if(!empty($_GET['name']))
{
   $name=$_GET['name'];
   print $name;
} else {  
   echo highlight_string($string, true);
}
?>
