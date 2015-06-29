<?php
session_start();
$thepass = "xiuchac";
if(isset($_POST['password'])){
	if($_POST['password'] == $thepass) {
		setcookie("is_user_logged","1");
	} else { 
		die("Login failed!"); 
	}
}

if(!empty($_COOKIE['is_user_logged'])) {
	if($_COOKIE['is_user_logged']=="1") { 
		echo "you are great ..."; 
	} else { 
		echo 'not logged'; 
	}
} else {


$string = <<<EOT
<?php
	if(\$_POST['password'] == \$thepass) {
		setcookie("is_user_logged","1");
	} else { 
		die("Login failed!"); 
	}
	
	if(\$_COOKIE['is_user_logged']=="1") { 
		echo "you are great ..."; 
	} else { 
		echo 'not logged'; 
	}
?>
EOT;

echo highlight_string($string, true);

}
?>