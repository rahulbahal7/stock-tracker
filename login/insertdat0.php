<html>
<head>
<title> Insertion of Records </title>
</head>
<body>

<?php
	$debug = FALSE;
	
	
	
	$password= $_POST['pass'];
	$username= $_POST['user'];
	$password=md5($password);
	$database= "stock";
	$db_handle = mysql_connect('localhost','user1','testing');
	mysql_select_db($database,$db_handle) or die('Could not select database ('.$database.') because of : '.mysql_error());
	//echo '<b> Connected to ('.$database.') successful! </b> <BR>';

	$userid1= $_POST['user'];
	$sql = mysql_query("SELECT password FROM tbl_user WHERE user_name = '$userid1'");
	$fetch = mysql_fetch_array($sql);
	$numrows = mysql_num_rows($sql);
	/*		
	if($numrows != "0" && $password == $fetch["password"]) 
	{	  
	   //echo ' Welcome to FRIENDS AND FAMILY! ';
	   header('Location: masterprofile.php'); 
	}
	*/
        if ($numrows==0) 
	{
	$SQL = "INSERT INTO tbl_user (user_name, password) VALUES ('$username','$password')";
	$result = mysql_query($SQL) or die('Query failed: ' . mysql_error());
	mysql_close($db_handle);
	//echo 'Records added to the database';
	echo "<a href=http://www.myfriendsnfamily.com/tools/stocks/login/secure.php>";
	echo '<br/>';
	echo ' CLICK HERE TO CONTINUE';
	echo '</a>' ;
	}
	else if($numrows>0)
	{

echo "username already exists.";
	
	echo "<a href=http://myfriendsnfamily.com/tools/stocks/login/>";
	echo '<br/>';
	echo ' Try another Username ';
	echo '</a>' ;

	}
	
?>

</body>
</html>










