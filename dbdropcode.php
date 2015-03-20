<?php
/*

*	File:		SQL DataBase Drop With PHP 
*	By:		Owes Shubho 
*	Date:		17/03/2015
*
*	This script *
*
*
*=====================================
*/

{ // Connect and Test MySQL and specific DB (return $dbSuccess = T/F)
				
			$hostname = "localhost";
			$username = "root";
			$password = "";
			
			$databaseName = "databasename";

			$dbConnected = @mysql_connect($hostname, $username, $password);

			$dbSuccess = true;
			if ($dbConnected) {
			} else {
				echo "MySQL connection FAILED<br /><br />";
				$dbSuccess = false;
			}
}  

	//	 Execute code ONLY if connections were successful 	
	if ($dbSuccess) {
		$dbName = "databasename";
		$drop_SQL = "DROP DATABASE ".$dbName;

			if (mysql_query($drop_SQL))  {	
				echo "'DROP DATABASE ".$dbName."' -  Successful.";
			} else {
				echo "'DROP DATABASE ".$dbName."' - Failed.";
			}

	mysql_query("DROP DATABASE databasename");
					
}

?>