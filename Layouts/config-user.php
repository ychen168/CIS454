<!-- Config.php 

Configures the database info
 -->
<?php
	$DB_SERVER = 'localhost';
	$DB_USERNAME = 'ec2-user';
	$DB_PASSWORD = 'password';
	$DB_DATABASE = 'secure_login';
	 
	$conn = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
	$dbcon = mysqli_select_db(DB_DATABASE);
	 
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	 
	if ( !$dbcon ) {
	 	die("Database Connection failed : " . mysql_error());
	}

?>