     
<?php
	
session_start();
$last_trade = $_POST['last_trade'];
$change = $_POST['change'];
$database= "stock";
	$db_handle = mysql_connect('localhost','user1','testing');
	mysql_select_db($database,$db_handle) or die('Could not select database ('.$database.') because of : '.mysql_error());
	//echo '<b> Connected to ('.$database.') successful! </b> <BR>';

	
	$SQL = "INSERT INTO values (last_trade,change) VALUES ('$last_trade','$change')";
	$result = mysql_query($SQL) or die('Query failed: ' . mysql_error());
	mysql_close($db_handle);
	//echo 'Records added to the database';
	
	
	echo "yes";
	

?>










