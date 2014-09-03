<?php

require_once("DBConnection.php");

/**
* Database Interaction class
*/
class DBInteraction
{
	public function fetch_table($table)
	{
		$query = "select * from $table";
		$obj = new DBConnection();
		$db = $obj->connect();
		$results = mysqli_query($db, $query) or die(mysqli_error());
		while ($row = mysqli_fetch_array($results))
		{ 
			echo($row['couponcode'] . ' ' . 
			$row['percentageoff']); 
			echo "<br>";
		}
		$obj->disconnect();
	}
}

	$db_interaction_object = new DBInteraction();
	$db_interaction_object->fetch_table('coupon');

?>
