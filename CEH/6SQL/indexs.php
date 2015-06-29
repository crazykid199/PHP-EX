<?php


	$link = mysql_connect("localhost","demophp","C34GEXK4dPU") or die("Can't connect Database");
	mysql_select_db("demophp",$link) or die("Can't select Database");
	
	
	$id = 0;
		
	if(empty($_GET['id'])) 
	{ 
		$id = 1;	
	} else { $id = $_GET['id']; }
	
	$query = "SELECT title, price from tbl_products where id=".$id." LIMIT 1";
	$result = mysql_query($query);
		
	while($row = mysql_fetch_row($result)) {
		echo "</br></br></br></br></br>";
		echo "Title: ".$row[0]."</br>";
		echo "Price: ".$row[1]."</br>";
	}
	

?>