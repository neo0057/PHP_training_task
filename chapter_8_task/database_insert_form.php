<?php

require_once("DBConnection.php");

/**
* Database Insertion class
*/
class DBInsert
{
	function build_query($coupon_code, $percentageoff, $table_name = 'coupon')
	{
		$query = "insert into $table_name values('{$coupon_code}', $percentageoff)";
		return $query;
	}
	function insert($query)
	{
		$obj = new DBConnection();
		$db = $obj->connect();
		mysqli_query($db, $query) or die(mysqli_error());
		echo "data successfully inserted <br>";
		$obj->disconnect();
	}
}

	$db_insert_object = new DBInsert();

	$coupon_code = $_POST['couponcode'];
	$off_value_int = 0; // default value is 0
	if (is_numeric(trim($_POST['percentageoff']))) {
		$off_value_int = (int)$_POST['percentageoff'];
	}

	$query = $db_insert_object->build_query($coupon_code, $off_value_int);
	$db_insert_object->insert($query);

?>
