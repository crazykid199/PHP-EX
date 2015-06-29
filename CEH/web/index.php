<?php
session_start();

$link = mysql_connect("localhost","demophp","C34GEXK4dPU") or die("Can't connect Database");
mysql_select_db("demophp",$link) or die("Can't select Database");
$id = session_id();
$sql = "select * from tbl_session where session = '$id'";
$result = mysql_query($sql);
if(mysql_num_rows(mysql_query($sql)) == 0) {
	$insert = mysql_query("insert into tbl_session (session) values ('$id')");
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$u_yes = "1";
	$u_no = "1";
	while($row = mysql_fetch_array($result)) {
		$u_yes = $row['yes'];
		$u_no = $row['no'];
	}
	if($u_yes == "1" || $u_no == "1") {
		
	} else {
		if($_POST['choice'] == "yes") {
			$in1 = mysql_query("update tbl_session set yes = '1' where session = '$id'");
		}
		
		if($_POST['choice'] == "no") {
			$in1 =  mysql_query("update tbl_session set no = '1' where session = '$id'");
		}
	}
	
}


$sql_count_all = "select session from tbl_session";
$sql_count_yes = "select session from tbl_session where yes = '1'";
$sql_count_no = "select session from tbl_session where no = '1'";
$count_all = mysql_num_rows(mysql_query($sql_count_all));
$count_yes = mysql_num_rows(mysql_query($sql_count_yes));
$count_no = mysql_num_rows(mysql_query($sql_count_no));


$filter_yes = mysql_num_rows(mysql_query("select * from tbl_session where yes = 1 and session = '$id'"));
$filter_no = mysql_num_rows(mysql_query("select * from tbl_session where no = 1 and session = '$id'"));

$string = "";

if($filter_yes == 1 || $filter_no == 1) {
	$string = "";
} else {
	$string = <<<EOT
	<form name="frmchoice" action="" method="post">
		<input type="radio" name="choice" value="yes"/>Yes&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="choice" value="no"/>No<br>
		<input type="submit" value="OK"/>
	</form>
EOT;
}
echo $string;



echo "count all: ".$count_all."<br>";
echo "count yes: ".$count_yes."<br>";
echo "count no: ".$count_no."<br>";

?>


