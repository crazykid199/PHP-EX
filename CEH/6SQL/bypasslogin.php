<?php
$link = mysql_connect("localhost","demophp","C34GEXK4dPU") or die("Can't connect Database");
mysql_select_db("demophp",$link) or die("Can't select Database");

if(isset($_GET['ok']))
{
	$u="";
	$p="";
	if($_GET['username'] == NULL)
	{
		echo "Please enter your username<br />";
	}
	else
	{
		$u=$_GET['username'];
	}
	
	if($_GET['password'] == NULL)
	{
		echo "Please enter your password<br />";
	}
	else
	{
		$p=$_GET['password'];
	}
	
	if($u && $p)
	{  
		$sql="select * from tbl_admin where username='".$u."' and password='".$p."'";
		$query=mysql_query($sql);
		
		if(mysql_num_rows($query) == 0)
		{
			echo "Username or password is not correct, please try again";
		}
		else
		{
			echo "login complete !!";
		}
	}
} else {
?>
<form action='' method='get'>
Username: <input type='text' name='username' size='25' /><br />
Password: <input type='password' name='password' size='25' /><br />
<input type='submit' name='ok' value='Login' />
</form></br></br></br>
<?php 
$string = <<<EOT
<?php 
\$sql="select * from tbl_admin where username='".\$_GET['username']."' and password='".\$_GET['password']."'";
\$query=mysql_query(\$sql);
		
		if(mysql_num_rows(\$query) == 0)
		{
			echo "Username or password is not correct, please try again";
		}
		else
		{
			echo "login complete !!";
		}
?>
EOT;

echo highlight_string($string, true);

} 

?>